<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipwards extends Model
{
    protected $table='wards';
    protected $fillable = [
        'district_id',
        'name'
    ];

    public function shipprovince(){
        return $this->belongsTo(Shipdistrict::class,'district_id','id');
    }
    //
}
