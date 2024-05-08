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
        Schema::create('applicant_assesments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->nullable();
            $table->integer('institute_type_id')->nullable();
            $table->integer('institute_id')->nullable();
            $table->foreignId('assesment_tools_id')->nullable();
            $table->integer('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->decimal('assesment_markes',10,2)->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_assesments');
    }
};
