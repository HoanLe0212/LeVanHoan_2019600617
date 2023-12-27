<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table ="comment";

    public function product(){
    	return $this->belongsTo('App\Models\Product','id_product','id')->withDefault();
    }

    public function user(){
    	return $this->belongsTo('App\Models\User','id_user','id')->withDefault();
    }
}
