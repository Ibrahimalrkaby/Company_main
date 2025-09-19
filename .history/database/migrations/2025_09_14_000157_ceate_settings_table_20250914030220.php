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
        $table->id();
        $table->string('address')->nullable();
        $table->integer('phone')->nullable();
        $table->string('email')->nullable();
        $table->string('facebook')->nullable();
        $table->string('youtube')->nullable();
        $table->string('instagram')->nullable();
        $table->string('linkedin')->nullable();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
