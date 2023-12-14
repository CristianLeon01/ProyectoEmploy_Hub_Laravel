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
        Schema::create('weighings', function (Blueprint $table) {
            $table->id();
            $table->set('languages', ['ENGLISH', 'FRENCH', 'GERMAN', 'SPANISH']);
            $table->set('education', ['BACHELORS DEGREE','POSTGRADUATE', 'UNDERGRADUATE', 'TECHNICIAN', 'TECHNOLOGIST', 'ENGINEER']);
            $table->string('work_experience');
            $table->string('technical_skills');
            $table->string('previous_project',60);
            $table->string('references',40);
            $table->string('additional_course',50);
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
        Schema::dropIfExists('weighings');
    }
};
