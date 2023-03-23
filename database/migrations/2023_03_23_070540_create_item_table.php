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
        Schema::create('item', function (Blueprint $table) {
            $table->id('itemId');
            $table->string('name');
            $table->integer('wert');
            $table->string('typ');
            $table->string('bildname');
            $table->timestamps();
        });
        Schema::create('uebersetzung', function (Blueprint $table) {
            $table->id('uebersetzungId');
            $table->foreignId('itemId');
            $table->string('sprache');
            $table->string('uebersetzungText');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
        Schema::dropIfExists('uebersetzung');
    }
};
