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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_time')->comment('Время и дата начала занятия');
            $table->unsignedBigInteger('session_configuration_id')->comment('Элемент конфигурации');
            $table->foreign('session_configuration_id')->references('id')->on('session_configurations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
