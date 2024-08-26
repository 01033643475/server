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
        Schema::create('toshiba', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->text('price');
            $table->text('title');
            $table->text('shipping');
            $table->text('seller');
            $table->text('watch');
            $table->text('location');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toshiba');
    }
};
