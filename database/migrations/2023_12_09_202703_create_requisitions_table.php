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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->string('charge_description', 500);
            $table->string('justification', 500);
            $table->string('ideal_candidate', 500);
            $table->string('mission_charge', 500);
            $table->string('responsibilities', 500);
            $table->string('candidate_description', 500);
            $table->string('candidate_talents', 500);
            $table->string('selection_criteria', 500);
            $table->foreignID('company_id')->constrained('companies')->onDelete('cascade');
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
        Schema::dropIfExists('requisitions');
    }
};
