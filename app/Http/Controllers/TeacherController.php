<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch users with teacherDetails and their associated courses
        $users = User::has('teacherDetails')
                     ->with('teacherDetails.course') // Eager load the course through teacherDetails
                     ->get();
        
        // Return the view with users
        return view('pages.teacher.index', compact('users'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Courses::all();
        return view('pages.teacher.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        // Create a new User record
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->type = 'Teacher';
        $user->email  = $request->input('email');
        $user->password  = bcrypt($request->input('password')); // Hash the password
        $user->save();
    
        // Create the Teacher record
        $teacher = Teacher::create(array_merge($request->validated(), ['user_id' => $user->id]));
    
        // Handle file upload if present
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

            // Save the image path to the teacher's record
            $teacher->upload = $imagePath;
            $teacher->save();
        }


        // Return a JSON response with a redirect URL
        return response()->json([
            'message' => 'Teacher created successfully.',
            'redirectUrl' => route('teacher.index')
        ]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $user = User::whereHas('teacherDetails')->with('teacherDetails')->findOrFail($id);
        $user = User::has('teacherDetails')
        ->with('teacherDetails.course') // Eager load teacherDetails and course
        ->findOrFail($id); // Find the user by ID or fail if not found
        $courses = Courses::all();
        return view('pages.teacher.edit', compact('user','courses'));
    }

    public function profile($id)
    {
        // $user = User::whereHas('teacherDetails')->with('teacherDetails')->findOrFail($id);
        $user = User::has('teacherDetails')
        ->with('teacherDetails.course') // Eager load teacherDetails and course
        ->findOrFail($id); // Find the user by ID or fail if not found
        $courses = Courses::all();

        $teacher = Teacher::where('user_id',$id)->first();
        $students = Student::with(['user','subject'])->where('course_id',$teacher->subject)->get();
        
        return view('pages.teacher.profile', compact('user','courses','students'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, $id, Teacher $teacher)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'first_name' => ['sometimes', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => 'nullable|string|min:8', // Add password validation
        ]);

            // Find the user by ID
        $user = User::findOrFail($id);

        // Update user details, except password
        if (isset($validatedData['password']) && !empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']); // Exclude password from update if not present
        }
        
        // Update user details
        $user->update($validatedData);

        // Ensure the teacher record is associated with the correct user
        $teacher = Teacher::where('user_id', $id)->firstOrFail();

        // Handle image upload if present
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

            // Save the image path to the teacher's record
            $teacher->upload = $imagePath;
        }

        // Update the associated teacher
        $teacher->update($request->except('upload'));

        // Redirect to a specific route or view
        return response()->json([
            'message' => 'Teacher updated successfully.',
            'redirectUrl' => route('teacher.index') // This is where you want to redirect
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Fetch the user by ID, or fail if not found
        $user = User::findOrFail($id);
        // Check if the user has related teacher details and delete them
        if ($user->teacherDetails) {
            $user->teacherDetails->delete();
        }
        // Delete the user
        $user->delete();
        // Return a JSON response with a message and redirect URL
        return response()->json([
            'message' => 'Teacher deleted successfully.',
            'redirectUrl' => route('teacher.index') // URL to redirect to after deletion
        ]);
    }
    
}
