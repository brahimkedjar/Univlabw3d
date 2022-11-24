@extends('objects3d.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Object 3D View AND Create AND Read, Update AND Delete</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/objects3/create') }}" class="btn btn-success btn-sm" title="Add New objects3D">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>type_3dObject_id</th>
                                        <th>object_name</th>
                                        <th>path</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($objects3D as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->type_3dObject_id }}</td>
                                        <td>{{ $item->object_name }}</td>
                                        <td>{{ $item->path }}</td>
  
                                        <td>
                                            <a href="{{ url('/objects3/' . $item->id) }}" title="View objects3D"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/objects3/' . $item->id . '/edit') }}" title="Edit objects3D"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/objects3' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete objects3D" onclick="return confirm('Confirm delete?') "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
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