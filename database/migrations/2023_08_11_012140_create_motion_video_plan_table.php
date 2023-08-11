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
        Schema::create('motion_video_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('motion_video_id');
            
            $table->unsignedBigInteger('plan_id');
            $table->foreign('motion_video_id')->references('id')->on('motion_videos')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');

            $table->primary(['motion_video_id', 'plan_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motion_video_plan');
    }
};