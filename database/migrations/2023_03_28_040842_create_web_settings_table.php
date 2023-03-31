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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('email', 64)->nullable();
            $table->string('phone_number_support', 20)->nullable()->default('0342.737.862');
            $table->string('phone_number_technical', 20)->nullable()->default('0342.737.862');
            $table->string('address', 200)->nullable()->default('FPT Polytechnic');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_settings');
    }
};
