<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	protected $table = 'data';
    protected $fillable = ['nilai','date','time'];

    public function field(){
    	return $this->belongsTo(Field::class);
    }

}
