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
                  <th>Micocontroller Type</th>
                  <th>Metadata</th>
                  <th>Description</th>
                  <th>Tags</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data_channel as $data_channel) 
              <tr class="odd gradeX">
                  <td>{{ $data_channel->name }}</td>
                  <td>{{ $data_channel->device_type }}</td>
                  <td>{{ $data_channel->micon_type }}</td>
                  <td>{{ $data_channel->metadata }}</td>
                  <td>{{ $data_channel->description }}</td>
                  <td>
                    @if ($data_channel->tag->isNotEmpty())
                      @foreach($data_channel->tag as $tag)
                        {{ $tag->name }}
                      @endforeach
                    @else 
                      <i>No Tag<i>
                    @endif
                  </td>
                  <td class= "center"> <a href="/channel/{{$data_channel->id}}/edit" class="btn btn-primary btn-mini">Edit</a> <a id="delCha" href="/channel/{{$data_channel->id}}/delete" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure want to delete this data?')" >Delete</a> </td>
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