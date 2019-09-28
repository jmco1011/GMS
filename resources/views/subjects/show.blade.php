@extends('layouts.master')
@section('content')
	<div class="container">
		<nav class="navbar navbar-light ">
			<a class="navbar-brand" href="#" > Welcome </a>
  			<a class="btn btn-warning" href='/logout' >Logout</a>
</nav>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subjects)
					<tr>
						<td>{{ $subjects->id }}</td>
						<td>{{ $subjects->title }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/add'>Add New Subject</a>
		

	</div>
@endsection