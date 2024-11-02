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
        Schema::create('masika_team_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            // $table->string('button_url')->nullable();
            // $table->string('button_text')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('page_section_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masika_team_sections');
    }
};
