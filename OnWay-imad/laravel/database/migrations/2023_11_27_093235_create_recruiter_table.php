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
        Schema::create('recruiters', function (Blueprint $table) {
            $table->uuid('recruiter_id')->primary(); // identify recruiters id
            $table->string('industry', 60)->nullable();
            $table->string('companySize', 60)->nullable();
            $table->text('companyWebsite')->nullable();
            $table->text('companyAbout')->nullable();
            $table->string('companyOverview')->nullable(); // i define it as a string because it will come as a file
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruiters');
    }
};
