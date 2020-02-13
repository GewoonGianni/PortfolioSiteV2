<?php

namespace App\Http\Controllers;
use App\Assignment;
use DB;
use App\Course;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }

    public function showMonitor()
    {
        $courses = \DB::table('courses');
        $courses = Course::All();

        $assignments = \DB::table('assignments');
        $assignments = Assignment::All();

        return view('monitor', [
            'courses' => $courses,
            'assignments' => $assignments,
        ]);
    }

    public function show($page)
    {
        return view($page);
    }
}
