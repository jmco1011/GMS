<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
     public function show(Subject $subjects)
    {
    	return view('subjects.show')->with('subjects',$subjects);
    }

    public function create()
    {
    	return view('subjects.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$subjects = new Subject;
    	$subjects->name = request()->name;
    	$subjects->save();

    	return redirect('/subjects');
    }
    public function index()
    {
            $subjects = Subject::all();  
            return view('subjects.show')->with('subjects',$subjects);      
        }

}
