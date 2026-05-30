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
        Schema::create('resume_settings', function (Blueprint $table) {
            $table->id();
            $table->string('degree')->nullable();
            $table->string('university')->nullable();
            $table->string('graduation_year')->nullable();
            $table->text('languages')->nullable(); // newline-separated
            $table->text('skills')->nullable();    // newline-separated
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_settings');
    }
};
