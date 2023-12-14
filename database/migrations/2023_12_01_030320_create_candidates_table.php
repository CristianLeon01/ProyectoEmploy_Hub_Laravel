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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('number_document',15);
            $table->set('document_type',['TI','CC','NIT','PASSPORT','CC_FOREIGNER']);
            $table->string('name',25);
            $table->string('phone',15);
            $table->string('email',30);
            $table->foreignID('id_user_types')->constrained('user_types')->onDelete('cascade');
            $table->foreignID('id_life_sheet')->constrained('life_sheets')->onDelete('cascade');
            $table->foreignID('id_state')->constrained('states')->onDelete('cascade');
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
        Schema::dropIfExists('candidate');
    }
};
