<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $courses = [
            ['course_name'=>'Computer Studies', 'dapartment_id'=>1,'id'=>1],
            ['course_name'=>'Enviromental Health', 'dapartment_id'=>2,'id'=>2]
            
        ];
        foreach ($courses as $course ) { 
            \App\Course::updateOrcreate($course);
        }
    }
}
