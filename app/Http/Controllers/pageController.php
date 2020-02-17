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

        $total = 0;

        foreach ($courses as $course) {
            $checker = true;
            foreach ($course->assignments as $assignment) {
                if ($assignment->completion !== 1) {
                    $checker = 0;
                }
            }
            if($checker == true) {
                $total += $course->ec;
            }
        }



        return view('monitor', [
            'courses' => $courses,
            'total' => $total,
        ]);
    }

    public function show($page)
    {
        return view($page);
    }
}
