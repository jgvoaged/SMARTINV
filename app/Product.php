<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Creditoperation;
class Product extends Model
{
    protected $fillable = ['date','hour','name'];
    public function creditoperations(){
        return $this->belongsToMany(Creditoperation::class, 'itemoperations');
    }
    public function creditoperations(){
        return $this->belongsToMany(Creditoperation::class, 'itemoperations');
    }      
    
}
