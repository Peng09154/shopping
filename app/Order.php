<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['name', 'phone', 'email', 'address', 'product_id', 'quantity', 'price','total'];
}
