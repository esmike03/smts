<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Requirements;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RequirementsController extends Controller
{
    public function index(Request $request)
    {
        $requirements = Requirements::all();
        return view('pages.requirements.admin',compact('requirements'));
    }

    public function download(Upload $document)
    {
        // Use the public disk to handle files in the public/storage directory
        $filePath = $document->document_path;
    
        // Check if the file exists using the public disk
        if (!Storage::disk('public')->exists($filePath)) {
            abort(404, 'File not found.');
        }
    
        // Get the full path to the file
        $fullPath = Storage::disk('public')->path($filePath);
    
        // Get the original extension or set a default extension
        $extension = pathinfo($document->document_name, PATHINFO_EXTENSION) ?: 'txt';
        $fileName = 'download-' . time() . '.' . $extension;
    
        // Return the download response
        return response()->download($fullPath, $fileName);
    }

    public function create(Request $request)
    {
         // Validate incoming data
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create and save the new post
        $requirements = new Requirements();
        $requirements->name = $validatedData['name'];
        $requirements->description = $validatedData['description'];
        $requirements->save(); // Save the post to the database

        // Optionally, return a response or redirect
        return redirect()->route('requirements.index')->with('success', 'Requirements created successfully!');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $requirements = Requirements::find($id);
        return view('pages.requirements.edit', compact('requirements'));
    }

    public function update(Request $request, Requirements $requirements)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $requirements->update($validatedData);
        return redirect()->route('requirements.index')->with('success', 'Requirements updated successfully!');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $requirements = Requirements::find($id);
        $requirements->delete();
        return redirect()->route('requirements.index')->with('success', 'Requirements deleted successfully!');
    }
    
}
