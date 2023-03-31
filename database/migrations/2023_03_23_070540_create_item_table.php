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
        Schema::create('items', function (Blueprint $table) {
            $table->id('itemId');
            $table->string('name');
            $table->integer('wert');
            $table->string('typ');
            $table->string('bildname');
            $table->timestamps();
        });
        Schema::create('translations', function (Blueprint $table) {
            $table->id('translationId');
            $table->foreignId('itemId');
            $table->string('language');
            $table->string('translationText');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('translations');
    }
};
