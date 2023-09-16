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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');    
            $table->string('lastname');
            $table->string('email');
            $table->string('tel_number');
            $table->dateTime('reservation_date');
            $table->unsignedBigInteger('user_id'); // Add user_id column for the relationship
            $table->unsignedBigInteger('table_id');
            $table->integer('guest_number');
            $table->integer('duration_hours')->default(2); // Add the 'duration_hours' column with a default value of 2 hours
            $table->string('status')->default('active'); // Add the 'status' column with a default value of 'active'
            $table->boolean('reminder_sent')->default(false);
            $table->timestamps();


              // Define foreign key relationship
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
