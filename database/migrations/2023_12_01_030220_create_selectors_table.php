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
        Schema::create('selectors', function (Blueprint $table) {
            $table->id();
            $table->string('number_document_selector',15);
            $table->set('document_type_selector',['TI','CC','NIT','PASSPORT','CC_FOREIGNER']);
            $table->string('name_selector',25);
            $table->string('email_selector',30);
            $table->string('phone_selector',15);
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
        Schema::dropIfExists('selectors');
    }
};
