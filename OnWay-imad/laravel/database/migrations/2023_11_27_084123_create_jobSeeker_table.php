<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->uuid('seeker_id')->primary(); // identify seekers id
            $table->string('title')->nullable(); // Position Name
            $table->date('dateBirthday');
            $table->integer('educationLevel')->default(0);
            $table->text('educationDescription')->nullable();
            $table->integer('experience')->default(0);
            $table->text('experienceDescription')->nullable();
            $table->json('skills')->default(new Expression('(JSON_ARRAY())'));
            $table->string('cv');
            $table->json('languages')->default(new Expression('(JSON_ARRAY())'));
            $table->string('linkedinLink')->nullable();
            $table->enum('visibility',['all','recruiter','offer']);
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
