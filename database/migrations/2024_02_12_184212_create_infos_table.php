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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('business_type')->nullable();
            $table->string('business_country')->nullable();
            $table->string('business_address1')->nullable();
            $table->string('business_address2')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_email')->unique();
            $table->string('business_website')->nullable();
            $table->string('business_location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
