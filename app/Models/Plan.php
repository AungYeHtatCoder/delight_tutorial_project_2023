<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
     protected $fillable = [
        'plan_name',
        'code',
    ];

    /**
     * Define the many-to-many relationship with MotionVideo model.
     *
     * @return BelongsToMany
     */
    public function motionVideos(): BelongsToMany
    {
        return $this->belongsToMany(MotionVideo::class, 'motion_video_plan')
            ->withTimestamps();
    }


    /**
     * Define the many-to-many relationship with ArtPhoto model.
     *
     * @return BelongsToMany
     */
    public function artPhotos(): BelongsToMany
    {
        return $this->belongsToMany(ArtPhoto::class, 'art_photo_plan')
            ->withTimestamps();
    }
}