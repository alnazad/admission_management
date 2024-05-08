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
        Schema::create('admission_circulars', function (Blueprint $table) {
            $table->id();
            $table->string('circular_name')->nullable();
            $table->foreignId('organization_id')->nullable();
            $table->integer('institute_types_id')->nullable();
            $table->integer('institute_id')->nullable();
            $table->string('upload_circular')->nullable();
            $table->longText('circular_discription')->nullable();
            $table->date('circular_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_circulars');
    }
};
