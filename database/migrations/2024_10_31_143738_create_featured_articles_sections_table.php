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
        Schema::create('featured_articles_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_section_id')->constrained()->onDelete('cascade'); // Ensure it references the pages table
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->text('title1')->nullable();
            $table->string('news_link')->nullable();
            $table->string('photo_link')->nullable();
            $table->string('video_link')->nullable();
            // $table->text('description3')->nullable();
            $table->text('content');
            $table->enum('type', ['video', 'news', 'photo']);
            $table->boolean('is_featured')->default(false);
            $table->string('image')->nullable();
            // $table->string('image_url')->nullable();
            $table->string('youtube_link');
            // $table->integer('read_time')->nullable(); // In minutes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_articles_sections');
    }
};
