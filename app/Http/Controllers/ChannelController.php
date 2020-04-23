<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Channel;
use App\Field;
use App\Tag;

class ChannelController extends Controller
{
    public function index(){
        $iduser = Auth::user()->id;
        $data_channel = Channel::where('user_id',$iduser)->get();
        //return view('channel.index', ['channel' => $channel->paginate(15)]);
    	return view('channels.index',['data_channel' => $data_channel]);
    }

    public function create(){
        $tag = Tag::all();
        //dd($tag);
    	return view('channels.create',compact('tag'));
    }

     public function store(Request $request){
        $iduser = Auth::user()->id;
        $channel = new Channel;
        $channel->user_id = $iduser;
        $channel->name = $request['name'];
        $channel->device_type = $request['device_type'];
        $channel->micon_type = $request['micon_type'];
        $channel->metadata = $request['metadata'];
        $channel->description = $request['description'];
        $channel->save();

    	return redirect('/channel')->with('flash_message_success','Channel added Successfully!');
    }

    public function edit($id){
    	$channel = Channel::find($id);
    	return view('channels.edit',['channel' => $channel]);
    }

    public function update(Request $request, $id){
    	$channel = Channel::find($id);
    	$channel->update($request->all());
    	return redirect('/channel')->with('flash_message_success','Channel updated Successfully!');
    }

    public function delete($id){
    	$channel = Channel::find($id);
    	$channel->delete();
    	return redirect('/channel')->with('flash_message_success','Channel Deleted Successfully!');
    }
}

