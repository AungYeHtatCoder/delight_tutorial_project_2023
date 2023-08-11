<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotionVideo extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'image',
        'published',
        'image_mime',
        'image_size',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
     /**
     * Define the many-to-many relationship with Plan model.
     *
     * @return BelongsToMany
     */
    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class, 'motion_video_plan')
            ->withTimestamps();
    }
}