<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Channel extends Model
{	
	protected $fillable = ['name','device_type','micon_type','metadata','description'];

    public function tag(){
    	return $this->belongsToMany(Tag::class);
    }
}
