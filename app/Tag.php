<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Channel;

class Tag extends Model
{
    protected $fillable = ['name'];
   
    public function channel(){
    	return $this->belongsToMany(Channel::class);
    }
}
