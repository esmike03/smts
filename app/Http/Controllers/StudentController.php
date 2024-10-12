<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Address;
use App\Models\Atainment;
use App\Models\CauseData;
use App\Models\Courses;
use App\Models\Learner;
use App\Models\Requirements;
use App\Models\Teacher;
use App\Models\Type;
use App\Models\Upload;
use App\Models\User;
use App\Models\UserCause;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = Student::with(['user','subject'])->get();
        $courses = Courses::all();

        if(auth()->user()->type ==  'Admin'){
            $users = Student::with(['user','subject'])->where('course_status','approved')->get();
        }else{
            $teacher = Teacher::where('user_id',auth()->user()->id)->first();
            $users = Student::with(['user','subject'])->where('course_id',$teacher->subject)->where('course_status','approved')->get();
        }

        return view('pages.student.index',compact('users','courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.student.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        
        $folderPath = public_path('uploads/profile/'); // Use public_path() instead of storage_path()
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file_name = uniqid() . '.' . $image_type; // Generate a unique file name
        $file_path = $folderPath . $file_name;

        // Save the signature image file
        file_put_contents($file_path, $image_base64);

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);


        if($request->input('rdy')== false){
            return back()->withErrors('Please select agree in I hereby allow TESDA to use/post my contact details');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
        
        $studentData = $request->only([
            'nationality', 'sex', 'status', 'employement_status', 'bmonth', 'bday', 'byear',
            'age', 'bcity', 'bprovince', 'bregion', 'ncae', 'where', 'when', 'qualification',
            'type_scholar', 'disclaimer', 'course_id', 'course_status'
        ]);
        
        // Add the signature to the student data
        $studentData['signature'] = $file_name;
        
        Student::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $studentData
        );
        

        
        $addressData = $request->only(['street', 'barangay', 'district', 'city', 'province', 'region']);
        Address::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $addressData
        );


        $educational = $request->input('educations');

        if ($educational) {
            foreach ($educational as $row) {
                Atainment::updateOrCreate(
                    [
                        'user_id' => auth()->user()->id,
                        'education_id' => $row
                    ],
                );
            }
        }

        $classifications = $request->input('classifications');

        if ($classifications) {
            foreach ($classifications as $row) {
                Learner::updateOrCreate(
                    [
                        'user_id' => auth()->user()->id,
                        'classication_id' => $row
                    ],
                );
            }
        }

        $disabilities = $request->input('type_disabilities');

        if ($disabilities) {
            foreach ($disabilities as $row) {
                Type::updateOrCreate(
                    [
                        'user_id' => auth()->user()->id,
                        'disability_id' => $row
                    ],
                );
            }
        }

        $causes = $request->input('cause_disabilities');

        if ($causes) {
            foreach ($causes as $row) {
                UserCause::updateOrCreate(
                    [
                        'user_id' => auth()->user()->id,
                        'cause_id' => $row
                    ],
                );
            }
        }
        
        return redirect()->route('guest.requirements')->with('success', 'TESDA Form Update Successfully.');
    }

    public function update(StoreStudentRequest $request, $id)
    {
        // Validate request data
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'rdy' => ['accepted'], // Make sure 'rdy' is selected as true
        ]);
    
        // If 'rdy' is not accepted, redirect back with error
        if (!$request->input('rdy')) {
            return back()->withErrors('Please select agree in I hereby allow TESDA to use/post my contact details');
        }
    
        // Update user data
        $user = User::findOrFail(auth()->id());
        $user->update($request->only('first_name', 'middle_name', 'last_name', 'email', 'phone'));
    
        // Update or create address
        $addressData = $request->only(['street', 'barangay', 'district', 'city', 'province', 'region']);
        Address::updateOrCreate(
            ['user_id' => auth()->id()],
            $addressData
        );
    
        // Update or create student data
        $studentData = $request->only(['nationality', 'sex', 'status', 'employment_status', 'bmonth', 'bday', 'byear', 'age', 'bcity', 'bprovince', 'bregion', 'ncae', 'where', 'when', 'qualification', 'type_scholar', 'disclaimer']);
        Student::updateOrCreate(
            ['user_id' => auth()->id()],
            $studentData
        );
    
        // Update or create educational attainments
        if ($request->has('educations')) {
            foreach ($request->input('educations') as $educationId) {
                Atainment::updateOrCreate(
                    ['user_id' => auth()->id(), 'education_id' => $educationId]
                );
            }
        }
    
        // Update or create learner classifications
        if ($request->has('classifications')) {
            foreach ($request->input('classifications') as $classificationId) {
                Learner::updateOrCreate(          
                    ['user_id' => auth()->id(), 'classication_id' => $classificationId]
                );
            }
        }
    
        // Update or create type of disabilities
        if ($request->has('type_disabilities')) {
            foreach ($request->input('type_disabilities') as $disabilityId) {
                Type::updateOrCreate(
                    ['user_id' => auth()->id(), 'disability_id' => $disabilityId]
                );
            }
        }
    
        // Update or create causes of disabilities
        if ($request->has('cause_disabilities')) {
            foreach ($request->input('cause_disabilities') as $causeId) {
                UserCause::updateOrCreate(
                    ['user_id' => auth()->id(), 'cause_id' => $causeId]
                );
            }
        }
    
        // Redirect to requirements route with success message
 
           return back()->with('success', 'TESDA Form Fill-up Completed.');
        // return redirect()->route('guest.requirements')->with('success', 'TESDA Form Fill-up Completed.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $student = Student::where('user_id', $id)
        ->firstOrFail();

        $user = User::where('id', $id)
        ->firstOrFail();

        Atainment::where('user_id', $student->user_id)->delete();
        Learner::where('user_id', $student->user_id)->delete();
        Type::where('user_id', $student->user_id)->delete();
        UserCause::where('user_id', $student->user_id)->delete();
        $courses = Courses::where('id',$student->course_id)->first();

        if($user->type == 'Student')
        {
            $courses->remaining =  $courses->remaining + 1;
            $courses->save();
            $user->type = 'Guest';
            $user->save();
        }
        $student->delete();
    }

    public function deleteEducation(Request $request)
    {
        $id = $request->input('id');
        $value = $request->input('value');

        $education = Atainment::where('user_id', $id)
        ->where('education_id', $value)
        ->firstOrFail();
        $education->delete();
    }

    public function deleteLearner(Request $request)
    {
        $id = $request->input('id');
        $value = $request->input('value');

        $education = Learner::where('user_id', $id)
        ->where('classication_id', $value)
        ->firstOrFail();
        $education->delete();
    }
    
    public function deleteDisability(Request $request)
    {
        $id = $request->input('id');
        $value = $request->input('value');

        $education = Type::where('user_id', $id)
        ->where('disability_id', $value)
        ->firstOrFail();
        $education->delete();
    
    }
    
    public function deleteCause(Request $request)
    {
        $id = $request->input('id');
        $value = $request->input('value');

        $education = UserCause::where('user_id', $id)
        ->where('cause_id', $value)
        ->firstOrFail();
        $education->delete();
    
    }
    
}
