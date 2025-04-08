<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipdistrict extends Model
{
    protected $table='district';
    protected $fillable = [
        'province_id',
        'name'
    ];

    public function shipprovince(){
        return $this->belongsTo(Shipprovince::class,'province_id','id');
    }
    //
}
