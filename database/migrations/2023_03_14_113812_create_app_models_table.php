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
        Schema::create('schoolAppDb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('user_email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('course')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('password');

            $table->string('application_status');

            // Guardian
            $table->string('g_name')->nullable();
            $table->string('g_email')->nullable();
            $table->integer('g_phone')->nullable();
            $table->string('g_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolAppDb');
    }
};
