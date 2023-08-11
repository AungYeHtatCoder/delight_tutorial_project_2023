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
        Schema::create('art_photo_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('art_photo_id');
            
            $table->unsignedBigInteger('plan_id');
            $table->foreign('art_photo_id')->references('id')->on('art_photos')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');

            $table->primary(['art_photo_id', 'plan_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_photo_plan');
    }
};