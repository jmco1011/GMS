@extends('layouts.master')
@section('content')
	<div class="container">
		<nav class="navbar navbar-light ">
			<a class="navbar-brand" href="#" > Welcome </a>
  		
</nav>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Advisory Section</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teachers)
					<tr>
						<td>{{ $teachers->id }}</td>
						<td>{{ $teachers->name }}</td>
						<td>{{ $teachers->advisorysection }}</td>

						
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teachers/add'>Add New Teacher</a>
		

	</div>
@endsection