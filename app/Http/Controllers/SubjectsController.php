<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
     public function show()
    {
    	$subjects = Subject::all();
    	return view('subjects.show')->with('subjects',$subjects);
    }

    public function create()
    {
    	return view('subjects.add');
    }

    public function add()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$project = new Project;
    	$project->name = request()->name;
    	
    	$project->save();

    	return redirect('/subjects');
    }

}
