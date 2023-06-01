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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("email")->unique();
            $table->string("phone")->nullable();
            $table->date("birthdate")->nullable();
            $table->string("specialization")->nullable();
            $table->integer("exprience")->default(0);
            $table->string("bloodGroup")->nullable();
            $table->string("university")->nullable();
            $table->integer("year")->nullable();
            $table->string("degree")->nullable();
            $table->string("gender")->nullable();
            $table->boolean('status')->default(false);
            $table->text("photo")->nullable();
            $table->text("linkedin")->nullable();
            $table->text("twitter")->nullable();
            $table->text("instagram")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
