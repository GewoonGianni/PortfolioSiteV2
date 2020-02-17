<?php

use App\Assignment;
use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assignments = [
            [
                'course_id' => 1,
                'assignment' => 'Eindgesprek',
                'weight' => 100,
            ],

            [
                'course_id' => 2,
                'assignment' => 'Theorietentamen',
                'weight' => 100,
            ],

            [
                'course_id' => 3,
                'assignment' => 'Casustoets',
                'weight' => 100,
            ],

            [
                'course_id' => 4,
                'assignment' => 'Nederlands toets',
                'weight' => 50,
            ],

            [
                'course_id' => 4,
                'assignment' => 'Verslag',
                'weight' => 50,
            ],

            [
                'course_id' => 5,
                'assignment' => 'Portfolio',
                'weight' => 100,
            ],

            [
                'course_id' => 6,
                'assignment' => 'Casustoets',
                'weight' => 50,
            ],

            [
                'course_id' => 6,
                'assignment' => 'Groepsproject',
                'weight' => 100,
            ],

            [
                'course_id' => 7,
                'assignment' => 'Agile functioneren',
                'weight' => 50,
            ],

            [
                'course_id' => 7,
                'assignment' => 'Engels opdrachten',
                'weight' => 25,
            ],

            [
                'course_id' => 7,
                'assignment' => 'Engels werkstuk',
                'weight' => 25,
            ],

            [
                'course_id' => 8,
                'assignment' => 'Eindgesprek',
                'weight' => 100,
            ],

            [
                'course_id' => 9,
                'assignment' => 'Casustoets',
                'weight' => 100,
            ],

            [
                'course_id' => 10,
                'assignment' => 'Requirementsverslag',
                'weight' => 50,
            ],

            [
                'course_id' => 10,
                'assignment' => 'Projectresultaat',
                'weight' => 50,
            ],

            [
                'course_id' => 11,
                'assignment' => 'Agile functioneren',
                'weight' => 50,
            ],

            [
                'course_id' => 11,
                'assignment' => 'Engels opdrachten',
                'weight' => 25,
            ],

            [
                'course_id' => 11,
                'assignment' => 'Engels werkstuk',
                'weight' => 25,
            ],

            [
                'course_id' => 12,
                'assignment' => 'Portfolio',
                'weight' => 100,
            ],

            [
                'course_id' => 13,
                'assignment' => 'Opdrachten',
                'weight' => 100,
            ],

            [
                'course_id' => 14,
                'assignment' => 'Code reviews',
                'weight' => 50,
            ],

            [
                'course_id' => 14,
                'assignment' => 'Projectresultaat',
                'weight' => 50,
            ]

        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
