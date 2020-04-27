<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Channel;
use Auth;

class FieldController extends Controller
{

    public function create($id){
        //$iduser = Auth::user()->id;
    	$data_field = Field::where('channel_id', $id)->get();
    	return view('fields.create',compact('data_field','id'));
    }

    public function store(Request $request){
        $field = new Field;
        $field->channel_id = $request['id'];
        $field->name = $request['name'];
        $field->save();
    	
        return redirect()->back()->with('flash_message_success','Field added Successfully!');
    }

    public function edit($id){
        $field = Field::find($id);
        return view('field.create',['field' => $field]);
    }

    public function update(Request $request, $id){
        $field = Field::find($id);
        $field->update($request->all());
        return redirect()->back()->with('flash_message_success','Field updated Successfully!');
    }

     public function delete($id){
        $field = Field::find($id);
        $field->delete();
        return redirect()->back()->with('flash_message_success','Field Deleted Successfully!');
    }

}
