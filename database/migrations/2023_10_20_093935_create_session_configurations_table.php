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
        Schema::create('session_configurations', function (Blueprint $table) {
            $table->id();
            $table->integer('day_number')->comment('День недели');
            $table->time('start_time')->comment('Время начала занятия');
            $table->string('duration_minutes')->comment('Продолжительность времени в минутах');
            $table->dateTime('start_date')->comment('Дата начала занятия');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_configurations');
    }
};
