<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['title', 'sort', 'pic', 'price', 'stock', 'cgy_id'];
}
