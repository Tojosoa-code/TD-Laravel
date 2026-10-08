<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CourseController extends Controller
{
    public function index() : View
    {
        return view('course', [
            'title' => 'Framework PHP',
            'framework' => 'Laravel',
            'unit' => 2,
            ]);
    }

    public function about() : View
    {
        return view('about', [
            'title' => 'About Page',
        ]);
    }
}
