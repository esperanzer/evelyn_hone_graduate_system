<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $depts = [

            ['department_name'=>'Business department', 'id'=>1],
            ['department_name'=>'Health Science department', 'id'=>2]

        ];
        foreach($depts as $dept){
            \App\Department::Updateorcreate($dept);
        }
    }
}
