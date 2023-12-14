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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->unique();
            $table->set('document_type',['TI','CC','NIT','PASSPORT','CC_FOREIGNER']);
            $table->string('name',25);
            $table->string('last_name',25);
            $table->string('email',30)->unique();
            $table->string('password',35);
            $table->foreignID('id_user_types')->constrained('user_types')->onDelete('cascade');
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
        Schema::dropIfExists('administrators');

        Schema::table('users', function (Blueprint $table) {
            $table->unique('id_user_types');
        });
    }
};
