<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
        'meta_keyword',
    ];

    public function products()
    {
            return $this->hasMany(Product::class,'category_id','id');
    }
    public function relatedproducts()
    {
            return $this->hasMany(Product::class,'category_id','id')->latest();
    }
    public function brands()
    {
            return $this->hasMany(Brand::class,'category_id','id')->where('status','0');
    }
}
