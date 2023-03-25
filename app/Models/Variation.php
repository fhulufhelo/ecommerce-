<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'type',
        'sku',
        'parent_id',
        'order',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
