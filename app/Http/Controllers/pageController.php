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

    public function showMonitor(Course $course)
    {
        $courses = \DB::table('courses');
        $courses = Course::All();

        $ec = $course->getAwardedEC($courses);

        return view('monitor', [
            'courses' => $courses,
            'total' => $ec,
        ]);
    }

    public function show($page)
    {
        return view($page);
    }
}
