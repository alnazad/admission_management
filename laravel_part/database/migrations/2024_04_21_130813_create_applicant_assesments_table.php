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
            $table->unsignedBigInteger('institute_type_id')->nullable();
            $table->unsignedBigInteger('assesment_tools_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
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
