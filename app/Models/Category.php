<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{ 
    protected $fillable = [
        'name',
        'parent_id',
        'image'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
