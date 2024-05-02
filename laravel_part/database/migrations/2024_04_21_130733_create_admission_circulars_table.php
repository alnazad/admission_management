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
            $table->string('circular_name');
            $table->foreignId('organization_id');
            $table->integer('institute_types_id');
            $table->integer('institute_id');
            $table->string('upload_circular');
            $table->longText('circular_discription');
            $table->date('circular_date');
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
