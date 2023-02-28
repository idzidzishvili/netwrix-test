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
        Schema::create('loc_state', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id')->autoIncrement();
            $table->string('name');
            $table->string('short_name', 50)->nullable();
            $table->bigInteger('country_id')->unsigned();

            $table->index(['country_id', 'short_name', 'name']);
            // $table->foreign('country_id')->references('country_id')->on('loc_country')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loc_state');
    }
};
