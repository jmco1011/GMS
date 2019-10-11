@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/teachers/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Name</label>
		    <input type="text" class="form-control" name='name'  placeholder="name" value="{{$teachers->name}}">
		    
		    <label for="title">Advisory Section</label>
		    	<div class="dropdown">
 					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Advisory Section
 					</button>
 					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 			 	  	<a class="dropdown-item" href="#">Action</a>
  					<a class="dropdown-item" href="#">Another action</a>
    				<a class="dropdown-item" href="#">Something else here</a>
  				</div>
				</div>

		  </div>
		 
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection