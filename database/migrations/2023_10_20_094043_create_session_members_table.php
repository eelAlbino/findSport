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
        Schema::create('session_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session_id')->comment('Занятие');
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('client_id')->comment('Клиент');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_members');
    }
};
