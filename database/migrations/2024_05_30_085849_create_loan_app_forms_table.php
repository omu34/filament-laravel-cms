<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loan_app_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_step_title');
            $table->string('second_step_title');
            $table->string('third_step_title');
            $table->string('fourth_step_title');
            $table->foreignId('page_section_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_app_forms');
    }
};
