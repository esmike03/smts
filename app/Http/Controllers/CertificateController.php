<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        if(auth()->user()->type == 'Admin'){
            $list = Student::with(['user','subject','certificate'])->get();
        }else{
            $list = Student::with(['user', 'subject', 'certificate'])
            ->where('user_id', auth()->user()->id)
            ->get();
        
        }
        $students = Student::with(['user', 'subject', 'certificate'])
        ->has('certificate') // Ensure students have at least one certificate
        ->get();
        return view('pages.certificates.index',compact('students','list'));
    }

    public function download(Certificate $certificate)
    {
        // Use the public disk to handle files in the public/storage directory
        $filePath = $certificate->document_path;
    
        // Check if the file exists using the public disk
        if (!Storage::disk('public')->exists($filePath)) {
            abort(404, 'File not found.');
        }
    
        // Get the full path to the file
        $fullPath = Storage::disk('public')->path($filePath);
    
        // Get the original extension or set a default extension
        $extension = pathinfo($certificate->document_name, PATHINFO_EXTENSION) ?: 'txt';
        $fileName = 'download-' . time() . '.' . $extension;
    
        // Return the download response
        return response()->download($fullPath, $fileName);
    }

    public function store(Request $request)
    {
            // Validate the incoming request
            $request->validate([
                'file' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:102400', // 100MB (102400 KB)
            ], [
                'file.required' => 'You must upload a file.', // Custom message for file required
                'file.max' => 'The file size must not exceed 2 MB.', // Custom message for file size
                'file.mimes' => 'The file must be a file of type: pdf, doc, docx, jpg, png.', // Custom message for file type
                'document_id.required' => 'The document ID is required.',
                'document_id.integer' => 'The document ID must be an integer.',
            ]);
            
        $uploadsCount = Certificate::where('user_id', $request->input('user_id'))
        ->count();
        if($uploadsCount > 0){
            return back()->withErrors('You already uploaded this to the student.');
        }else{
            $file = $request->file('file');
            
            $originalFileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $fileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);


            // Sanitize the file name
            $fileNameWithoutExtension = Str::slug($fileNameWithoutExtension, '-');
            $uploadPath = 'certificates/' . 'student_' . $request->input('user_id');

            // Generate a unique file name
            $fileName = $fileNameWithoutExtension . '.' . $fileExtension;
            $counter = 1;
            while (Storage::disk('public')->exists($uploadPath . '/' . $fileName)) {
                $fileName = $fileNameWithoutExtension . '-' . $counter . '.' . $fileExtension;
                $counter++;
            }

            $sizeInBytes = $file->getSize();

            // Determine the size format to use
            if ($sizeInBytes < 1048576) {
                // Convert the size to kilobytes (KB)
                $fileSize = number_format($sizeInBytes / 1024, 2) . ' KB';
            } else {
                // Convert the size to megabytes (MB)
                $fileSize = number_format($sizeInBytes / 1048576, 2) . ' MB';
            }

            $certificate = Certificate::create([
                'document_id' => $request->document_id,
                'user_id' => $request->input('user_id'),
                'document_name' => $fileName,
                'document_path' => $file->storeAs($uploadPath, $fileName, 'public'),
                'document_size' => $fileSize,
                'document_extension' => $fileExtension,
                'status' => 'pending',
                'description' => $request->description,
            ]);
            return back()->with('success', 'Certificate saved successfully.');
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $certificate = Certificate::find($id);
        $certificate->delete();
        return back()->with('success', 'Certificate delete successfully.');
    }
}
