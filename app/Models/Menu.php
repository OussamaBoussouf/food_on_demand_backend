<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'name',
        'desc',
        'category_id',
        'price',
        'size_id',
        'ingredient_id',
    ];
}