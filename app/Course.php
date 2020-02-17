<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function getAwardedEC($courses):float
    {
        $total = 0;
        foreach ($courses as $course) {
            $checker = true;
            foreach ($course->assignments as $assignment) {
                if ($assignment->grade < 5.4) {

                    $checker = false;
                }
            }
            if($checker == true) {
                $total += $course->ec;
            }
        }
        return $total;
    }

}
