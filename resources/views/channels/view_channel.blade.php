@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Channels</a> <a href="#" class="current">View Channels</a>  </div>
    <h1>Channels</h1>
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif   
    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif       

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Channels</h5>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sensor Name</th>
                  <th>Device Type</th>
                  <th>Micon Type</th>
                  <th>Metadata</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
              @foreach($channel as $channel) 
              <tr class="odd gradeX">
                  <td>{{ $channel->name }}</td>
                  <td>{{ $channel->device_type }}</td>
                  <td>{{ $channel->micon_type }}</td>
                  <td>{{ $channel->metadata }}</td>
                  <td>{{ $channel->description }}</td>
                  <td class= "center"> <a href="{{ url('/channels/edit-channel/'.$channel->channel_id) }}" class="btn btn-primary btn-mini">Edit</a> <a id="delCha" href="{{ url('/channels/delete-channel/'.$channel->channel_id) }}" class="btn btn-danger btn-mini">Delete</a> </td>
                </tr>
              @endforeach
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection