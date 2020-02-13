<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;

class monitorController extends Controller
{
    function edit()
    {
        $courses = \DB::table('courses');
        $courses = Course::All();

        return view('monitor.monitorEdit', ['courses' => $courses]);
    }
}
