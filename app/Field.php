<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['name'];

    public function channel(){
    	return $this->belongsTo(Channel::class);
    }

    public function data(){
    	return $this->hasMany(Data::class);
    }
}
