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
        Schema::create('postulates', function (Blueprint $table) {
            $table->id();
            $table->boolean('statusPostulate')->default(false);
            $table->foreignUuid('offer_id')->references('offer_id')->on('offers');
            $table->foreignUuid('seeker_id')->references('seeker_id')->on('job_seekers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulates');
    }
};
