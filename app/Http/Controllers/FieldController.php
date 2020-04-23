<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Channel;

class FieldController extends Controller
{

    public function create($id){
    	$field = \App\Field::all();  
    	return view('fields.create',compact('field'));
    }

    public function store(Request $request, $idchannel){
        //$channel = \App\Channel::find($idchannel)
        //$channel->field()->attach($request->field,['name' => $request->name])->ex;
        //$field = new Field;
        //$field->name = $request['name'];
        //$field->save();
    	//return redirect('field/'.$idchannel.'/create')->with('flash_message_success','Field added Successfully!');
    }

}
