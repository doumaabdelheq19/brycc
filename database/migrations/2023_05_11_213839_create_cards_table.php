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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('Amountunit')->nullable();
            $table->string('Amount')->nullable();
            $table->text('description')->nullable();
            $table->string('currency')->nullable();
            $table->string('typeoffer')->nullable();
            $table->string('price')->nullable();
            $table->string('exchange')->nullable();
            $table->string('attachement')->nullable();
            $table->foreignId('user_id')->constrained();
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
