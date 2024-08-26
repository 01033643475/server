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
        Schema::create('microsoft', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->text('title');
            $table->text('price');
            $table->text('discount');
            $table->text('shipping');
            $table->text('location');
            $table->text('watch');
            $table->text('seller');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsoft');
    }
};
