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
            $table->string("firstname");
            $table->string("lastname");
            $table->string("email")->unique();
            $table->string("phone");
            $table->date("birthdate");
            $table->string("specialization");
            $table->integer("exprience")->default(0);
            $table->string("bloodGroup");
            $table->string("university");
            $table->string("year");
            $table->string("degree");
            $table->string("gender");
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
