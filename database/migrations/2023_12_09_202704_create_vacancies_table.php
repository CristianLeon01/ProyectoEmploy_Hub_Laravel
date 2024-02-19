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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->integer('number_vacancies_applied');
            $table->foreignID('id_offers')->constrained('offers')->onDelete('cascade');
            $table->foreignID('id_localities')->constrained('localities')->onDelete('cascade');
            $table->foreignID('id_contract_types')->constrained('contract_types')->onDelete('cascade');
            $table->foreignID('weighings_id')->constrained('weighings')->onDelete('cascade');
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
        Schema::dropIfExists('vacancies');
    }
};
