@extends('objects3d.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit objects3D</div>
  <div class="card-body">
       
      <form action="{{ url('objects3/' .$objects3D->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$objects3D->id}}" id="id" />
        <label>type 3dObject id</label></br>
        <input type="text" name="type_3dObject_id" id="type_3dObject_id" value="{{$objects3D->type_3dObject_id}}" class="form-control"></br>
        <label>object name</label></br>
        <input type="text" name="object_name" id="object_name" value="{{$objects3D->object_name}}" class="form-control"></br>
        <label>path</label></br>
        <input type="text" name="path" id="path" value="{{$objects3D->path}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop