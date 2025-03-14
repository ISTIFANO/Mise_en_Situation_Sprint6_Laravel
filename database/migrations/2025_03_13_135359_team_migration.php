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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pays');
            $table->date('date_creation');
            $table->foreignId('user_id')->references('id')->on('users');
        
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
