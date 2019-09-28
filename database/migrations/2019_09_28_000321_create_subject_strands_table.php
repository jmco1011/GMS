<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectStrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_strands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('Subject_id');
            $table->unsignedInteger('Strand_id');
            $table->integer('Semester');
            $table->integer('Grade_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_strands');
    }
}
