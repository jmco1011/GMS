<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
class TeachersController extends Controller
{
      public function show(Teachers $teachers)
    {
    	return view('teachers.show')->with('teachers',$teachers);
    }

    public function create()
    {
    	return view('teachers.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
           'advisorysection' =>'required'
            
        ]);
        
    	$teachers = new Teachers;
    	$teachers->name = request()->name;
    	$teachers->advisorysection = request()->advisorysection;
    	$teachers->save();

    	return redirect('/teachers');
    }
    public function index()
    {
            $teachers = Teachers::all();  
            return view('teachers.show')->with('teachers',$teachers);      
        }

}
