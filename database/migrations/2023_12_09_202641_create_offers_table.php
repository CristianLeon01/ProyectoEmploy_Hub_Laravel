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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name_vacant', 50);
            $table->string('description_vacant', 250);
            $table->string('name_company',100);
            $table->string('address',50);
            $table->decimal('salary', 10,2);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('months_experience');
            $table->string('requirements', 500);
            $table->foreignID('id_contract_types')->constrained('contract_types')->onDelete('cascade');
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
        Schema::dropIfExists('offers');
    }
};
