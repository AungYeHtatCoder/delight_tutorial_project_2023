<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends \App\Models\Product
{
    //use HasFactory;
     public function getRouteKeyName()
    {
        return 'id';
    }
}