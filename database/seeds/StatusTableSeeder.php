<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $statuses =  [
            ['status_name'=>'Post Graduate','id'=>1],
            ['status_name'=>'Pre Graduate','id'=>2]
        ];
        foreach($statuses as $status){
             \App\Statuse::create($status);
        }
    }
}
