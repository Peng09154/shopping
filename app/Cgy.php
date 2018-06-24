<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    protected $fillable =['title', 'sort', 'pic'];

    public function getPicAttribute($value){
    	// dd('123');
    	return 'https://i.imgur.com/rbG7hDX.jpg';
    }
}
