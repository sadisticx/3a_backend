<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Must import it
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // 2. Must use it inside the class

    protected $fillable = ['name', 'price', 'category'];
}
