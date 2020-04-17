<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class FieldController extends Controller
{
    
    public function addField(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
           // echo "<pre>"; print_r($data); die;
           $channel = new Channel;
           $channel->parent_id = $data['parent_id'];
           $channel->label = $data['label'];
          // $channel->status = $data['status'];
           $channel->save();
           return redirect('/channels/view-channel')->with('flash_message_success','Field added Successfully!');
        }
        $levels = Channel::where(['parent_id'=>0])->get();
        return view('channels.add_field')->with(compact('levels'));
    }
}