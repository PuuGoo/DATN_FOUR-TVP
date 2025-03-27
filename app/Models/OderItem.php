<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OderItem extends Model
{
    protected $table='order_items';
    protected $fillable = [
        'order_id',
        'infor_option_id',
        'product_id',
        'qty',
        'price'
    ];

    public function idorder(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function idinforvari(){
        return $this->belongsTo(infor_option::class,'infor_option_id','id');
    }
    public function idpod(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    //
}