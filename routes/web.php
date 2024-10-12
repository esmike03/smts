<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Models\Courses;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/form', [PageController::class, 'form'])->name('form');

Route::get('/dashboard', function () {
    $courses = Courses::withCount('students')->get();
    $coursesCount = Courses::count();
    $teachersCount = User::where('type', 'Teacher')->count();
    $studentsCount = User::where('type', 'Student')->count();
    $teachers = User::has('teacherDetails')
    ->with('teacherDetails.course') // Eager load the course through teacherDetails
    ->get();
    return view('dashboard',compact('teachersCount','coursesCount','studentsCount','courses','teachers'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{id}', [ProfileController::class, 'profile'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

          Route::get('/profile/{id}', [ScheduleController::class, 'profile'])->name('profile');
    Route::name('teacher.')->prefix('/teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
        Route::get('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/store', [TeacherController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [TeacherController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [TeacherController::class, 'update'])->name('update');
        Route::get('/profile/{id}', [TeacherController::class, 'profile'])->name('profile');
    });
    

    Route::name('student.')->prefix('/student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::post('/create', [StudentController::class, 'store'])->name('create');
        Route::post('/delete', [StudentController::class, 'destroy'])->name('delete');
        Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
        Route::post('/delete-education', [StudentController::class, 'deleteEducation'])->name('delete.education');
        Route::post('/delete-learner', [StudentController::class, 'deleteLearner'])->name('delete.learner');
        Route::post('/delete-disability', [StudentController::class, 'deleteDisability'])->name('delete.disability');
        Route::post('/delete-cause', [StudentController::class, 'deleteCause'])->name('delete.cause');
    });

    Route::name('courses.')->prefix('/courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('index');
        Route::get('/create', [CoursesController::class, 'create'])->name('create');
        Route::post('/store', [CoursesController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [CoursesController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [CoursesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CoursesController::class, 'update'])->name('update');
        Route::post('/status', [CoursesController::class, 'status'])->name('status');
    });



    Route::name('guest.')->prefix('/guest')->group(function () {
        Route::get('/', [ScheduleController::class, 'index'])->name('index');
        Route::get('/requirements', [ScheduleController::class, 'requirements'])->name('requirements');
        Route::get('/form-fill-up/{id}', [ScheduleController::class, 'fillUp'])->name('form-fill-up');
        Route::get('/edit-form/{id}', [ScheduleController::class, 'editForm'])->name('edit-form');
        
        Route::get('/list', [ScheduleController::class, 'list'])->name('list');
        Route::get('/profile/{id}', [ScheduleController::class, 'profile'])->name('profile');
        Route::post('/status', [ScheduleController::class, 'status'])->name('status');
        Route::post('/convert', [ScheduleController::class, 'convert'])->name('convert');
        Route::post('/delete', [ScheduleController::class, 'destroy'])->name('delete');
        Route::post('/approved', [ScheduleController::class, 'approved'])->name('approved');
        Route::post('/reason', [ScheduleController::class, 'reason'])->name('reason');
        Route::put('/update/{id}', [ScheduleController::class, 'update'])->name('update');
    });

    Route::name('requirements.')->prefix('/requirements')->group(function () {
        Route::get('/', [RequirementsController::class, 'index'])->name('index');
        Route::post('/create', [RequirementsController::class, 'create'])->name('create');
        Route::post('/edit', [RequirementsController::class, 'edit'])->name('edit');
        Route::put('/update/{requirements}', [RequirementsController::class, 'update'])->name('update');
        Route::post('/delete', [RequirementsController::class, 'destroy'])->name('delete');
        Route::get('/documents/{document}/download', [RequirementsController::class, 'download'])->name('documents.download');
    });

    Route::name('upload.')->prefix('/upload')->group(function () {
        Route::post('/create', [UploadController::class, 'store'])->name('create');
        Route::post('/delete', [UploadController::class, 'destroy'])->name('delete');
    });

    Route::name('tesda.')->prefix('/tesda')->group(function () {
        Route::get('/', [FormController::class, 'index'])->name('index');
    });

    Route::get('/print/pdfrequest/{id}', [FormController::class, 'printPdfRequest'])->name('print.pdfrequest');

    Route::name('certificate.')->prefix('/certificate')->group(function () {
        Route::get('/', [CertificateController::class, 'index'])->name('index');
        Route::post('/create', [CertificateController::class, 'store'])->name('create');
        Route::get('/documents/{certificate}/download', [CertificateController::class, 'download'])->name('documents.download');
        Route::post('/delete', [CertificateController::class, 'destroy'])->name('delete');
    });
});



require __DIR__.'/auth.php';
