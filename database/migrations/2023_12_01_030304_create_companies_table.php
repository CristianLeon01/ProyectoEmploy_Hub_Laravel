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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',25);
            $table->string('legal_representative',50);
            $table->enum('company_type', ['NOT_DEFINED','LIMITED','ANONYMOUS','COMMAND', 'ASSOCIATIVE COMPANY', 'SOLE PROPRIETORSHIP', 'OTHER', 'NATURAL PERSON', 'COLLECTIVE SOCIETY', 'SIMPLIFIED JOINT STOCK COMPANIES', 'LIMITED PARTNERSHIP', 'LIMITED PARTNERSHIP BY SHARES', 'RURAL COMPANY SENA EMPRENDE RURAL']);
            $table->string('NIT',50)->unique;
            $table->string('number_workers', 50);
            $table->string('legal_representative_email',80);
            $table->enum('nature', ['PUBLIC','PRIVATE','MIXED']);
            $table->string('email', 80);
            $table->string('phone',30);
            $table->string('alternate_phone',30);
            $table->string('human_resources_manager',50);
            $table->string('phone_2',30);
            $table->string('alternate_phone_2',30);
            $table->string('email_manager',80);
            $table->foreignID('id_user_types')->constrained('user_types')->onDelete('cascade');
            $table->foreignID('id_post')->constrained('posts')->onDelete('cascade');
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
        Schema::dropIfExists('companies');
    }
};
