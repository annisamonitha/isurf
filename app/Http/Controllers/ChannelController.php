<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class ChannelController extends Controller
{
    public function addChannel(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
           // echo "<pre>"; print_r($data); die;
           $channel = new Channel;
           $channel->name = $data['name'];
           $channel->parent_id = $data['parent_id'];
           $channel->device_type = $data['device_type'];
           $channel->micon_type = $data['micon_type'];
           $channel->metadata = $data['metadata'];
           $channel->description = $data['description'];
          // $channel->status = $data['status'];
           $channel->save();
           return redirect('/channels/view-channel')->with('flash_message_success','Channel added Successfully!');
        }
        $levels = Channel::where(['parent_id'=>0])->get();
        return view('channels.add_channels')->with(compact('levels'));
    }
    public function editChannel(Request $request, $channel_id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            Channel::where(['channel_id'=>$channel_id])->update(['name'=>$data['name'],'device_type'=>$data['device_type'],'micon_type'=>$data['micon_type'],'metadata'=>$data['metadata'],'description'=>$data['description']]);
            return redirect('/channels/view-channel')->with('flash_message_success','Channel Updated successfully!');
        }
        $channelDetails = Channel::where(['channel_id'=>$channel_id])->first();
        return view('channels.edit_channel')->with(compact('channelDetails'));
    }

    public function deleteChannel($channel_id = null){
        if(!empty($channel_id)){
            Channel::where(['channel_id'=>$channel_id])->delete();
            return redirect()->back()->with('flash_message_success','Channel Deleted Successfully!');
        }
    }
    public function viewChannel(){
        $channel = Channel::get();
        return view('channels.view_channel')->with(compact('channel'));
    }
}
