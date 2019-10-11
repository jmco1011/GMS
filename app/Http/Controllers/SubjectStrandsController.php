<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrands;

class SubjectStrandsController extends Controller
{
  public function show(SubjectStrands $SubjectStrands)
    {
    	return view('SubjectStrands.show')->with('Subjectstrands',$SubjectStrands);
    }

    public function create()
    {
    	return view('SubjectStrands.create');
    }

    public function store()
    {
        request()->validate([
            'semester' => 'required',
            'grade_level'=>'required'
        ]);
       
    	$SubjectStrands = new SubjectsStrans;
    	$SubjectStrands->semester = request()->semester;
    	$SubjectStrands->grade_level = request()->grade_levl;
    	$SubjectStrands->save();

    	return rdirect('/SubjectStrands');
    }
    public function index()
    {
           $SubjectStrands = SubjectStrands::all();  
            return view('SubjectStrands.show')->with('SubjectStrands',$SubjectStrands);      
        }
}
