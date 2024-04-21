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
        Schema::create('online_admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->integer('institute_type_id');
            $table->integer('institute_id');
            $table->string('applicant_id');
            $table->string('mother_name');
            $table->string('father_name');
            $table->integer('class_name');
            $table->integer('birth_certificate_no');
            $table->string('mobile');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_admissions');
    }
};
