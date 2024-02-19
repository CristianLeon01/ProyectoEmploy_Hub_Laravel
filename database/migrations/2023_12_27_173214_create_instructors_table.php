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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->set('document_type',['TI','CC','NIT','PASSPORT','CC_FOREIGNER']);
            $table->string('document_number')->unique();
            $table->string('instructor_name', 30);
            $table->string('instructor_lastname', 30);
            $table->string('email', 50);
            $table->string('password');
            $table->foreignID('id_administrators')->constrained('administrators')->onDelete('cascade');
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
        Schema::dropIfExists('instructors');
    }
};
