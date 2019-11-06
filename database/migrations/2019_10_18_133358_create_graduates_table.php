<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->string('first_name',60);
            $table->string('last_name',50);
            $table->bigInteger('student_id')->unsigned();
            $table->string('gender',6);
            $table->string('phone_number');
            $table->string('address',200);
            $table->unsignedBigInteger('course_id');
            $table->date('graduate_date');
            $table->string('graduate_year');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('infor_status_id');
            $table->timestamps();




            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->ondelete('RESTRICT')
            ->onUpdate('cascade');
            
            $table->foreign('department_id')
            ->references('id')
            ->on('departments')
            ->ondelete('cascade');
            
            $table->foreign('infor_status_id')
            ->references('id')->on('statuses')
            ->ondelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduates');
    }
}
