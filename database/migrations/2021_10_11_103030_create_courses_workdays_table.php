<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_workdays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->dateTime('date');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->integer('week_number');
            $table->string('time_start');
            $table->string('time_stop');
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
        Schema::dropIfExists('courses_workdays');
    }
};
