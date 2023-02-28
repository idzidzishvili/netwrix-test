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
        Schema::create('loc_country', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->autoIncrement();
            $table->string('name');
            $table->string('short_name', 50)->nullable();

            $table->index(['short_name', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loc_country');
    }
};
