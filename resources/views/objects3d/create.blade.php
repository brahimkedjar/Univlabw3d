@extends('objects3d.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New objects3D</div>
  <div class="card-body">
       
      <form action="{{ url('objects3') }}" method="post">
        {!! csrf_field() !!}
        <label>type 3dObject id</label></br>
        <input type="text" name="type_3dObject_id" id="type_3dObject_id" class="form-control"></br>
        <label>object name</label></br>
        <input type="text" name="object_name" id="object_name" class="form-control"></br>
        <label>path</label></br>
        <input type="text" name="path" id="path" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop