<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Salepoint;

class Creditoperation extends Model
{
    protected $fillable = ['creditcustomer_id','user_id','total','notes'];
    public function products(){
        return $this->belongsToMany(Product::class, 'itemoperations');
    } 
    public function salepoints(){
        return $this->belongsToMany(Salepoint::class, 'Creditoperations_salepoints');
    }
}