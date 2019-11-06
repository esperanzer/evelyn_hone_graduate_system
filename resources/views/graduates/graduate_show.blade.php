@extends('admin.layouts.app')

@section('content')
<div class="container" style=" padding:20px 200px">
  <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="What you looking for?">
  </div>

  <div class="row">
    <div class="col-12">
      <div class="pull-right">
        <a href="{{route('graduates.create')}}">
          <button class="btn btn-primary ">Add Graduate</button>
        </a>
      </div>

    </div>
  </div>


<div class="row">
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>NO#</th>
      <th class="col-md-3 col-xs-3">Student ID</th>
      <th class="col-md-3 col-xs-3">First name</th>
      <th class="col-md-4 col-xs-4">LastName</th>
      <th class="col-md-3 col-xs-3">Phone number</th>
      <th class="col-md-4 col-xs-4">gender</th>
      <th class="col-md-3 col-xs-3">Course</th>
      <th class="col-md-3 col-xs-3">Department</th>
      <!-- <th class="col-md-4 col-xs-4">Graduate date</th>
      <th class="col-md-4 col-xs-4">Graduate Year</th> -->
      <th class="col-md-3 col-xs-3">Status</th>


    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
    <?php $no=1?>
    <tr>
@foreach($graduates as $graduate)
      <th>{{ $no++}}</th>
      <th><a href="#">{{$graduate->student_id }}</a> </th>
      <th>{{$graduate->first_name }}</th>
      <th>{{$graduate->last_name }}</th>
      <th>{{$graduate->phone_number }}</th>
       <th>{{$graduate->gender }}</th>
       <th>{{$graduate->course_name }}</th>
      <!-- <th>{{$graduate->department_name }}</th>        -->
      <!-- <th>{{$graduate->graduate_date }}</th> -->
      <th>{{$graduate->graduate_year }}</th>
      <th>{{$graduate->status_name }}</th>
      
  @endforeach
    </tr>
   
  </tbody>
</table>
</div>
</div>

@endsection	
