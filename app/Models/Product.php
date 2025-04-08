<?php

namespace App\Models;

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='id';

    protected $attributes = [
        'status' => 0
    ];

    protected $fillable = [
        'brand_id',
        'category_id',
        'product_name',
        'product_slug',
        'product_code',
        'product_qty',
        'product_tags',
        'selling_price',
        'discount_price',
        'short_descp',
        'long_descp',
        'product_thumnail',
        'vendor_id',
        'status'
    ];

    public function vendor(){
        return $this->belongsTo(User::class,'vendor_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
