<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeacherLoad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('TeacherLoad', function (Blueprint $TeacherLoad) {
            $TeacherLoad->bigIncrements('id');
            $TeacherLoad->unsignedInteger('user_id');
            $TeacherLoad->unsignedInteger('subject_strand_id');
            $TeacherLoad->unsignedInteger('section_id');
            $TeacherLoad->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
