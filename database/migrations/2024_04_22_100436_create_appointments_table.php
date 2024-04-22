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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->datetime('dateTime')->unique();
            $table->string('observations');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('consultingRoom_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('professional_id')->references('id')->on('professionals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('consultingRoom_id')->references('id')->on('consulting_rooms')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
