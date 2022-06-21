<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relationships
    public function articles(){
        return $this->belongsToMany('App\Models\Article')
                    ->withTimestamps();
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function hair_services()
    {
        return $this->hasMany(HairService::class);
    }
}
