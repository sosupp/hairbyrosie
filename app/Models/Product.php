<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'slug',
        'unit_price',
        'discount_price',
        'stock',
        'description',
        'image',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
