<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('disability_discription')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('religion')->nullable();
            $table->string('assesment_tool_id')->nullable();
            $table->string('contract_no')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('birth_certificate_no')->nullable();
            $table->foreignId('class_name_id')->nullable();
            $table->foreignId('siblings_id')->nullable();
            $table->decimal('marks',10,2)->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
