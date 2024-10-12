<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        // Pass the courses to the view
        return view('pages.landing.index', compact('courses'));
    }

    public function form()
    {
        return view('pages.landing.form');
    }
}
