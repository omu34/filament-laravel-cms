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
        Schema::create('contact_us_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('button_text');
            $table->string('hour_title');
            $table->string('hour_subtitle');
            $table->string('address_title');
            $table->string('address_subtitle');
            $table->string('contact_title');
            $table->string('contact_subtitle');
            $table->string('form_title');
            $table->foreignId('page_section_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_sections');
    }
};
