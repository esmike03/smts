<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $courses = Courses::all();
        // Pass the courses to the view
        return view('pages.courses.index', ['courses' => $courses]);
    }

    public function status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        $courses = Courses::findOrFail($id);
        $courses->status = $status;
        $courses->save();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoursesRequest $request)
    {
        // Handle image upload
        $imagePath = null;

        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            // Define the path to save the image in the public/images directory
            $destinationPath = public_path('images');
            
            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            
            // Generate a unique file name and move the file
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            
            // Set the image path to be used in the database
            $imagePath = 'images/' . $fileName;
        }
    
        // Create and save the course record
        $course = new Courses();
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->upload = $imagePath; // Save the image path to the database
        $course->slots = $request->input('slots');
        $course->remaining = $request->input('slots');
        $course->batch = $request->input('batch');
        $course->status = 'In Progress';
        $course->start_date = $request->input('start_date');
        $course->end_date = $request->input('end_date');
        $course->scholar_type = $request->input('scholar_type');
        $course->save();
    
        return response()->json([
            'message' => 'Course save successfully.',
            'redirectUrl' => route('courses.index') // URL to redirect to after deletion
        ]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        return view('pages.courses.edit', compact('course'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursesRequest $request,$id, Courses $courses)
    {
         // Find the course by ID
        $course = Courses::findOrFail($id);

        // Handle image upload
        $imagePath = $course->upload; // Keep the existing image path

        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            
            // Define the path to save the image in the public/images directory
            $destinationPath = public_path('images');
            
            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Generate a unique file name and move the file
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            
            // Set the image path to be used in the database
            $imagePath = 'images/' . $fileName;

            // Optionally, delete the old image file if a new one is uploaded
            if ($course->upload && file_exists(public_path($course->upload))) {
                unlink(public_path($course->upload));
            }
        }

        // Update the course record
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->upload = $imagePath; // Save the new image path to the database
        $course->slots = $request->input('slots');
        $course->remaining = $request->input('slots');
        $course->batch = $request->input('batch');
        $course->start_date = $request->input('start_date');
        $course->end_date = $request->input('end_date');
        $course->scholar_type = $request->input('scholar_type');
        $course->save();

        return response()->json([
            'message' => 'Course updated successfully.',
            'redirectUrl' => route('courses.index') // URL to redirect to after update
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();
    }
}
