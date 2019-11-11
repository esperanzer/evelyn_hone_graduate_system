@extends('admin.layouts.app')

@section('content')

<div class="container " style="padding-left:200px; padding-bottom:800px;">
    <div class="row">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Status Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">delete</th>
            <th scope="col">edit</th>

            </tr>
        </thead>
        <tbody>
            {{ $no=0 }}
            @foreach($status as $v)
            <tr>
            <th scope="row">{{ $no++}}</th>
            <td>{{$v->status_name}}</td>
            <td>{{$v->created_at}}</td>
            <td>{{$v->updated_at}}</td>
            <td> <i class="fa fa-trash" style="color:red;"></i></td>
            <td><a href=""><i class="fa fa-edit" style="color:blue;"></i></a></td>

            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection