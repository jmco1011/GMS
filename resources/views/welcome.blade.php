@extends('layouts.master')
@section('content')
    <div class="container">
        <nav class="navbar navbar-light ">
            <a class="navbar-brand" href="#" > Welcome </a>
          
</nav>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">What to do?</th>
                
                    
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td> <a class="btn btn-primary" href='/subjects'>Subject</a></td>
                        <td> <a class="btn btn-primary" href='/sections'>Section</a></td>
                        <td> <a class="btn btn-primary" href='/strands'>Strand</a></td>
                        <td> <a class="btn btn-primary" href='/teachers'>Teacher</a></td>
                        
                    </tr>
                
            </tbody>
        </table>
       
        

    </div>
@endsection