<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Atainment;
use App\Models\Cause;
use App\Models\Classification;
use App\Models\Disability;
use App\Models\Education;
use App\Models\Learner;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Type;
use App\Models\UserCause;
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class FormController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->type ==  'Admin'){
            $students = Student::with(['user','subject'])->get();
        }else{
            $teacher = Teacher::where('user_id',auth()->user()->id)->first();
            $students = Student::with(['user','subject'])->where('course_id',$teacher->subject)->get();
        }
        return view('pages.form.index',compact('students'));
    }

    public function printPdfRequest($id)
    {
        // Set options for Dompdf
        $options = new \Dompdf\Options();
        $options->set('isRemoteEnabled', true); // Enable remote content
        $pdf = new \Dompdf\Dompdf($options); // Create a new instance of Dompdf
    
        // Prepare data
        $educations = Education::all();
        $classifications = Classification::all();
        $disablities = Disability::all();
        $causes = Cause::all();

        $students = Student::with(['user','subject','address'])->where('id',$id)->first();

        $attainments = Atainment::where('user_id', $students->user_id)->pluck('education_id')->toArray(); // Only get the education_id of attainments
        $learners = Learner::where('user_id', $students->user_id)->pluck('classication_id')->toArray(); // Only get the education_id of attainments
        $types = Type::where('user_id', $students->user_id)->pluck('disability_id')->toArray();
        $user_causes = UserCause::where('user_id', $students->user_id)->pluck('cause_id')->toArray();

        // Load a view that will be converted into the PDF
        $pdf->loadHtml(view('pages.form.request', compact('educations', 'classifications', 'disablities', 'causes','students','attainments','learners','types','user_causes'))->render());
    
        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $pdf->render();
    
        // Set headers to display PDF in the browser
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="request.pdf"');
    }
    
    
    
    
    

}
