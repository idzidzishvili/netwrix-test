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
        Schema::create('partner_locator', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('status');
            $table->string('logo');
            $table->string('address');
            $table->string('website');
            $table->string('phone', 100);
            $table->string('countries_covered', 1000);
            $table->string('states_covered', 1000); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_locator');
    }
};
