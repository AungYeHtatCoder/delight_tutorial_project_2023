<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtPhoto extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'photo',
        'published',
        'photo_mime',
        'photo_size',
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
    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'art_photo_plan');
            
    }
}