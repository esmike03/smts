<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Atainment;
use App\Models\Cause;
use App\Models\Classification;
use App\Models\Courses;
use App\Models\Disability;
use App\Models\Education;
use App\Models\Learner;
use App\Models\Requirements;
use App\Models\Student;
use App\Models\Type;
use App\Models\Upload;
use App\Models\User;
use App\Models\UserCause;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function reason(Request $request)
    {
        $id = $request->input('id');
        $student = Student::where('id', $id)->first();
        return view('pages.guest.reject', compact('student'));
    }

    public function update(Request $request,$id,  Student $student)
    {
        $student = Student::where('id', $id)->first();
        $student->notes = $request->input('description');
        $student->course_status = 'reject';
        $student->save();
        return back()->with('success', 'Form Successfully  Rejected');
    }

    public function profile($id)
    {
        
        $user = User::with('student')->where('id', $id)->first();

        $documents = Requirements::with('upload')
        ->whereHas('upload', function ($q) use ($id) {
            $q->where('user_id', $id);
        })
        ->orWhereDoesntHave('upload')
        ->get();

        $student = Student::where('user_id', $id)
        ->get();
        
        $studCount = Student::where('user_id', $id)
        ->count();

        return view('pages.guest.profile', compact('user','documents','student','studCount'));
    }

    public function editForm($id)
    {
        $educations = Education::all();
        $classifications = Classification::all();
        $disablities = Disability::all();
        $causes = Cause::all();

        $student = Student::with('user')->where('user_id', $id)
        ->first();

        $address = Address::where('user_id', $id)
        ->first();
   
        $attainments = Atainment::where('user_id', $id)->pluck('education_id')->toArray(); // Only get the education_id of attainments
        $learners = Learner::where('user_id', $id)->pluck('classication_id')->toArray(); // Only get the education_id of attainments
        $types = Type::where('user_id', $id)->pluck('disability_id')->toArray();
        $user_causes = UserCause::where('user_id', $id)->pluck('cause_id')->toArray();

        return view('pages.guest.edit', compact('educations', 'classifications', 'disablities', 'causes', 'student','address','attainments','learners','types','user_causes'));

    }

    public function status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');

        $upload = Upload::findOrFail($id);
        $upload->status = $status;
        $upload->save();
    }
    
    public function convert(Request $request)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);
        $user->type = 'Student';
        $user->save();

        $student = Student::where('user_id', $id)
        ->first();

        $courses = Courses::where('id',$student->course_id)->first();
        $courses->slots =  $courses->slots - 1;
        $courses->save();
    }
    
    public function index()
    {
        $courses = Courses::all();
        return view('pages.guest.index', compact('courses'));
    }

    public function list()
    {
        $users = User::with('form')->where('type','Guest')
        ->get();
        return view('pages.guest.list', compact('users'));
    }

    public function requirements()
    {
        $documents = Requirements::all();
        $uploads = Upload::with('document')->get();
        $student = Student::where('user_id', auth()->user()->id)
        ->get();
        return view('pages.guest.requirements',compact('documents','uploads','student'));
    }

    public function approved(Request $request)
    {
        $id = $request->input('id');
        $student = Student::where('id', $id)->first();
        $student->course_status = 'approved';
        $student->save();

        $user = User::where('id', $student->user_id)->first();
        $user->type = 'Student';
        $user->save();

        $course = Courses::where('id', $student->course_id)->first();


        if ($course) {
            $course->remaining =  $course->remaining - 1;
            $course->save();         
        }
        
        return back()->with('success', 'Form Successfully  Approved');
    }

    public function fillUp($id)
    {
        $educations = Education::all();
        $classifications = Classification::all();
        $disablities = Disability::all();
        $causes = Cause::all();

        $interns = Student::where('user_id', auth()->user()->id)
        ->whereHas('subject', function ($query) {
            $query->where('status', '!=', 'Completed');
        })
        ->count();
    
        $courses = Courses::where('id', $id)->first();

        if($courses->remaining == 0){
            $scholar_type = 'Regular';
        }else{
            $scholar_type = $courses->scholar_type;
        }

        if($interns > 0)
        {
            return back()->withErrors('You have a pending course please settle it to the administrator or kindly finished ur program');
        }

        return view('pages.guest.form',['educations' => $educations,'classifications' => $classifications,'disablities' => $disablities,'causes' => $causes, 'id' => $id, 'scholar_type' => $scholar_type, 'courses' => $courses]);
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Guest successfully deleted');
    }
    
}
