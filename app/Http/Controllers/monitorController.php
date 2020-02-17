<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use App\Assignment;

class monitorController extends Controller
{
    function edit()
    {
        $courses = \DB::table('courses');
        $courses = Course::All();

        return view('monitor.monitorEdit', ['courses' => $courses]);
    }

    function update()
    {
        request()->validate([
            'courseSelect' => ['required'],
            'grade' => ['required', 'min:1', 'max:4'],
        ]);

        $assignment = Assignment::find(request('courseSelect'));
        $assignment->grade = request('grade');

        if (request('grade') > 5.4) {
            $assignment->completion = true;
        }

        $assignment->save();

        return redirect('/../dashboard/monitor');
    }
}
