<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarted=[];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
