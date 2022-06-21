<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HairService extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'category_id',
        'name',
        'slug',
        'image',
        'price',
        'discount_price',
        'views',
        'description',
    ];

    // relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
