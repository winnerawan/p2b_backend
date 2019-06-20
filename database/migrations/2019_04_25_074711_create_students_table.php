<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned(false);
            $table->bigInteger('participant_id');
            $table->bigInteger('program_id');
            $table->string('no_reg', 50);
            $table->string('nim', 25);
            $table->string('fullname', 100);
            $table->string('dob', 50);
            $table->string('program_study', 100);
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
        Schema::dropIfExists('students');
    }
}
