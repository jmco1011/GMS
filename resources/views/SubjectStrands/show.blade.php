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
					<th scope="col">Subject ID</th>
					<th scope="col">Strand ID</th>
					<th scope="col">Grade Level</th>
					<th scope="col">Semester</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($SubjectStrands as $SubjectStrands)
					<tr>
						<td>{{ $SubjectStrands->id }}</td>
						<td>{{ $SubjectStrands->name }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subject-strands/add'>Add New Subject</a>
		

	</div>
@endsection