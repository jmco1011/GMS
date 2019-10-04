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
					
				</tr>
			</thead>
			<tbody>
				@foreach($strands as $strands)
					<tr>
						<td>{{ $strands->id }}</td>
						<td>{{ $strands->name }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/strands/add'>Add New Strand</a>
		

	</div>
@endsection