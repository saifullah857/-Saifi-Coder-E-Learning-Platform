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
        Schema::table('instructors', function (Blueprint $table) {
            $table->dropUnique(['email']);   // remove unique index
            $table->string('email')->change(); // keep as normal string
        });
    }

    public function down(): void
    {
        Schema::table('instructors', function (Blueprint $table) {
            $table->unique('email'); // add unique again if rollback
        });
    }
};
