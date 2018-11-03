<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salepoint extends Model
{
    protected $fillable = ['date','hour','name','prefix','discount'];
}
