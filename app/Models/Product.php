<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'is_online'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
