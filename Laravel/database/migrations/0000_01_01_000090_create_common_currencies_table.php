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
        Schema::create('common_currencies', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('symbol');
            $table->string('name');
            $table->string('symbol_native');
            $table->tinyInteger('decimal_digits');
            $table->tinyInteger('rounding');
            $table->string('name_plural');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('common_currencies');
    }
};
