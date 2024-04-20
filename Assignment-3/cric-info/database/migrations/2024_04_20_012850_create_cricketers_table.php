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
        Schema::create('cricketers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->integer('age');
            $table->string('role');
            $table->integer('matches_played');
            $table->integer('runs_scored');
            $table->integer('wickets_taken');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cricketers');
    }
};
