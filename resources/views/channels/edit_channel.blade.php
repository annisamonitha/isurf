@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Channels</a> <a href="#" class="current">Edit Channels</a>  </div>
    <h1>Channels</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Channels</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/channels/edit-channel/'.$channelDetails->channel_id) }}" name="edit_channel" id="edit_channel" novalidate="novalidate"> {{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Sensor Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" value="{{ $channelDetails->name}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Device Type</label>
                <div class="controls">
                  <input type="text" name="device_type" id="device_type" value="{{ $channelDetails->device_type}}">
                </div>
              <div class="control-group">
                <label class="control-label">Micon Type</label>
                <div class="controls">
                  <input type="text" name="micon_type" id="micon_type" value="{{ $channelDetails->micon_type}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Metadata</label>
                <div class="controls">
                  <input type="text" name="metadata" id="metadata" value="{{ $channelDetails->metadata}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"> {{ $channelDetails->description}} </textarea>
                </div>
              </div>
              <!--<div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <input type="text" name="status" id="status">
                </div>
              <div class="control-group">
                <label class="control-label">Api Key</label>
                <div class="controls">
                  <input type="text" name="api_id" id="api_id">
                </div>-->
              <div class="form-actions">
                <input type="submit" value="Edit Channel" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      
@endsection