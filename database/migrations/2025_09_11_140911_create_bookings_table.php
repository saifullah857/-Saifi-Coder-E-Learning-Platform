<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('enrollments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('course_id');   // Foreign key to courses
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('payment_id')->nullable(); // Only for Paid courses
        $table->decimal('course_price', 10, 2)->nullable(); // store price
        $table->date('enrollment_date');
        $table->date('last_date'); // ✅ fixed
        $table->timestamps();

        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
    });
}

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
