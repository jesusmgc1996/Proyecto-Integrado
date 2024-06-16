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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 9)->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('photo');
            $table->string('phoneNumber')->unique();
            $table->string('email')->unique();
            $table->string('schedule');
            $table->string('education');
            $table->string('experience');
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('consultingRoom_id');
            $table->foreign('specialty_id')->references('id')->on('specialties')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('consultingRoom_id')->references('id')->on('consulting_rooms')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
