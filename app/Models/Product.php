<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public $fillable = ['name', 'category', 'price', 'size', 'brand', 'color', 'material', 'description', 'image1', 'image2', 'image3', 'image4'];
    public $guarded = [];
}
