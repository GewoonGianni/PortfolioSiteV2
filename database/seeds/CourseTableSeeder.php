<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $courses = [
            [
                'course' => 'Opleidings- en beroepsoriëntatie',
                'EC' => 2.5,
            ],
            [
                'course' => 'Computer science basics',
                'EC' => 7.5,
            ],
            [
                'course' => 'Programming basics',
                'EC' => 5,
            ],
            [
                'course' => 'Professional skills 1',
                'EC' => 2.5,
            ],
            [
                'course' => 'HZ Personality',
                'EC' => 2.5,
            ],
            [
                'course' => 'Object-oriented programming',
                'EC' => 5,
            ],
            [
                'course' => 'Professional skills 2',
                'EC' => 2.5,
            ],
            [
                'course' => 'Professional werkplek',
                'EC' => 2.5,
            ],
            [
                'course' => 'Framework development 1',
                'EC' => 5,
            ],
            [
                'course' => 'Framework project 1',
                'EC' => 5,
            ],
            [
                'course' => 'Professional skills 3',
                'EC' => 2.5,
            ],
            [
                'course' => 'IT Personality 1',
                'EC' => 2.5,
            ],
            [
                'course' => 'Framework development 2',
                'EC' => 5,
            ],
            [
                'course' => 'Framework project 2',
                'EC' => 5,
            ]
        ];

        foreach($courses as $course)
        {
            Course::create($course);
        }
    }
}
