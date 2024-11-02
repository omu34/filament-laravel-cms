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
        Schema::create('job_dones', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->string('subtitle1');
            $table->string('subtitle2');
            $table->string('subtitle3');
            $table->string('image');
            $table->foreignId('page_section_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_dones');
    }
};
