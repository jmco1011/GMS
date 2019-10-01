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
					<th scope="col">Is Active</th>

					
				</tr>
			</thead>
			<tbody>
				@foreach($sections as $sections)
					<tr>
						<td>{{ $sections->id }}</td>
						<td>{{ $sections->name }}</td>
						<td>{{ $sections->is_active }}</td>


						
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/sections/add'>Add New Section</a>
		

	</div>
@endsection