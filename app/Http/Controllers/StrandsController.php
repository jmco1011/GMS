<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strands;

class StrandsController extends Controller
{
     public function show(Strands $strands)
    {
    	return view('strands.show')->with('strands',$strands);
    }

    public function create()
    {
    	return view('strands.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
           
        ]);
        
    	$Strands = new Strands;
    	$Strands->name = request()->name;
    	$Strands->save();

    	return redirect('/strands');
    }
    public function index()
    {
            $Strands = Strands::all();  
            return view('strands.show')->with('strands',$Strands);      
        }

}
