@extends('objects3d.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">objects3D Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">type 3dObject id : {{ $objects3D->type_3dObject_id }}</h5>
        <p class="card-text">object name : {{ $objects3D->object_name }}</p>
        <p class="card-text">path : {{ $objects3D->path }}</p>
  </div>
    </hr>
  </div>
</div>