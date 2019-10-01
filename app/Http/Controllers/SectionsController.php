<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sections;

class SectionsController extends Controller
{
    public function show(Sections $sections)
    {
    	return view('sections.show')->with('sections',$sections);
    }

    public function create()
    {
    	return view('sections.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' =>'required'
            
        ]);
        
    	$sections = new Sections;
    	$sections->name = request()->name;
    	$sections->save();

    	return redirect('/sections');
    }
    public function index()
    {
            $sections = Sections::all();  
            return view('sections.show')->with('sections',$sections);      
        }

}

