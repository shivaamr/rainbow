<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
		'shape',
        'usage',
		'material',
	    'size',
		'pattern',
		'baseshape',
        'brand',
        'description',
        'price',
        'quantity',
        'thickness',
	    'diameter',
        'trending',
        'featured',
        'status',
    ];

    public function category()

    {
        return $this->belongsTo(category::class,'category_id','id');
    }
    public function productImages()

    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function productColors()
    {
        return $this->hasMany(ProductColor::class,'product_id','id');
    }
}
