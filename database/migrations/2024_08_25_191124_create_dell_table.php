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
        Schema::create('dell', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->text('title');
            $table->string('price');
            $table->text('Company');
            $table->text('img');
            $table->string('ratings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dell');
    }
};
