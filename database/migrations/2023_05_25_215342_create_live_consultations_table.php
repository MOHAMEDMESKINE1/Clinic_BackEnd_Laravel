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
        Schema::create('live_consultations', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->date("date");
            $table->string("status");
            $table->string("host_video");
            $table->string("client_video");
            $table->string("description");
            $table->integer("duration");
            $table->string("password");
           
            // fk
            $table->foreignId("patient_id")->constrained("patients")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("doctor_id")->constrained("doctors")->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_consultations');
    }
};
