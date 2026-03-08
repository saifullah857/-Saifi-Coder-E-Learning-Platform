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
        Schema::create('courses', function (Blueprint $table) {
           $table->id();
            $table->string('title'); // Course title
            $table->float('rating')->default(0); // Rating (e.g. 4.54)
            $table->string('learners_count')->nullable(); // e.g. "1.3L+"
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced'])->default('Beginner'); // Difficulty level
            $table->string('duration')->nullable(); // Duration (e.g. "5.0 Hrs")
            $table->decimal('price', 8, 2)->default(0); // Price
            $table->string('is_free')->nullable(); // Free or Paid
            $table->string('image')->nullable(); // Image path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
