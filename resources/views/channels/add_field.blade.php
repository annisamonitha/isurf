@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Channels</a> <a href="#" class="current">Add Field</a>  </div>
    <h1>Field</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Field</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/channels/add-field') }}" name="add_field" id="basic_validate" novalidate="novalidate"> {{ csrf_field() }}
              
              <div class="control-group">
                <label class="control-label">Channel Category</label>
                <div class="controls">
                  <select name="parent_id">
                    @foreach($levels as $val)
                    <option value="{{ $val->parent_id }}">{{ $val->name}}</option>
                    @endforeach
                </select>
              </div>    
              </div>
              
              <div class="control-group">
                <label class="control-label">label</label>
                <div class="controls">
                  <input type="text" name="label" id="label">
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
                </div>
              <div class="form-actions">
                <input type="submit" value="Add Field" class="btn btn-success">
              </div>-->
            </form>
          </div>
        </div>
      </div>
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection