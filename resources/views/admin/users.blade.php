@extends('admin.layouts.app')

@section('content')


<div>
	<a href="{{ route('user_data.create')}}" class="btn btn-primary float-right">Add a user</a>
	
	<!-- <button type="button"class="btn btn-primary float-right">Add a user</button> -->
</div>

<div class="container pt-5">
	<div class="row">
<div class="col-md-2"></div>
<div class="col-md-10">

		
	<table class="table table-bordered" style="margin-left: 50px">
	  <thead>
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">Name</th>
	      <!-- <th scope="col">Last</th> -->
	      <th scope="col">Email</th>
	      <th scope="col"><span><i>edit</i></span></th>


	    </tr>
	  </thead>
	  <tbody>
	  	<?php $no=1;?>
	  	@foreach($users as $user)
		    <tr>
		    
		      <th scope="row">{{$no++}}</th>
		      <td>{{$user->name}}</td>
		      <td>{{$user->email }}</td>
		      <td>edit</td>
		 
		      
		    </tr>
		   
	   @endforeach
	  </tbody>
	</table>
</div>

</div>
</div>



@endsection