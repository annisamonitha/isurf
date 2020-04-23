<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Field;
use App\Tag;

class Channel extends Model
{	
	protected $fillable = ['name','device_type','micon_type','metadata','description'];

	public function user(){
    	return $this->belongsTo(User::class);
    }

	public function field(){
    	return $this->hasMany(Field::class);
    }

    public function tag(){
    	return $this->belongsToMany(Tag::class);
    }
}
