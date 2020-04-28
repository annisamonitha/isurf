@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Fields</a> <a href="#" class="current">View Fields</a>  </div>
    <h1>Fields</h1>
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

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
  + Fields </button>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Fields</h5>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data_field as $data_field)
              <tr class="odd gradeX">
                  <td>{{ $data_field->name }}</td>
                  <td class= "center"> 
                    <a data-field_id="{{$data_field->id}}" data-name="{{$data_field->name}}" type="button" class="btn btn-primary btn-mini" data-toggle="modal" data-target="#ModalEdit">Edit</a> 
                    <a id="delCha" href="/field/{{$data_field->id}}/delete" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure want to delete this data?')" >Delete</a> 
                  </td>
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

<!-- Modal Add Field -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> ADD FIELD </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form class="form-horizontal" method="POST" action="{{ route('field.store'), $id }}">
        @csrf
      <div class="modal-body">
              <div class="control-group">
                <label class="control-label">Name </label>
                <div class="controls">
                  <input type="text" name="name" id="name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                  <input type="hidden" value= {{$id}} name="id" id="id">
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal Edit Field -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> EDIT FIELD </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="POST" action="{{ route('field.update', 'field_id' )}}">
        @csrf
        @method('PUT')
              <div class="control-group">
                <label class="control-label">Name </label>
                <div class="controls">
                  <input type="text" name="name" id="name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                  <input type="hidden" name="field_id" id="field_id">
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
$('#ModalEdit').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)
var name = button.data('name')
var field_id = button.data('field_id')

var modal = $(this)

modal.find('.modal-title').text('EDIT FIELD INFO');
modal.find('.modal-body #name').val(name)
modal.find('.modal-body #field').val(field_id)

})
</script>