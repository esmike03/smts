<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //
    public function store(Request $request)
    {
            // Validate the incoming request
            $request->validate([
                'file' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:102400', // 100MB (102400 KB)
                'document_id' => 'required|integer|max:10',
            ], [
                'file.required' => 'You must upload a file.', // Custom message for file required
                'file.max' => 'The file size must not exceed 2 MB.', // Custom message for file size
                'file.mimes' => 'The file must be a file of type: pdf, doc, docx, jpg, png.', // Custom message for file type
                'document_id.required' => 'The document ID is required.',
                'document_id.integer' => 'The document ID must be an integer.',
            ]);
            
        $uploadsCount = Upload::where('user_id', auth()->user()->id)
        ->where('document_id', $request->input('document_id'))
        ->where('status', 'pending')
        ->count();
        if($uploadsCount > 0){
            return back()->withErrors('You already uploaded this kind of attachment. Please wait for the admin to accept.');
        }else{
            $file = $request->file('file');
            
            $originalFileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $fileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);


            // Sanitize the file name
            $fileNameWithoutExtension = Str::slug($fileNameWithoutExtension, '-');
            $uploadPath = 'documents/' . 'student_' . auth()->user()->id;

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

            $document = Upload::create([
                'document_id' => $request->document_id,
                'user_id' => auth()->user()->id,
                'document_name' => $fileName,
                'document_path' => $file->storeAs($uploadPath, $fileName, 'public'),
                'document_size' => $fileSize,
                'document_extension' => $fileExtension,
                'status' => 'pending',
                'description' => $request->description,
            ]);
            return back()->with('success', 'Requirement saved successfully.');
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $requirements = Upload::find($id);
        $requirements->delete();
        return back()->with('success', 'Requirement delete successfully.');
    }

}
