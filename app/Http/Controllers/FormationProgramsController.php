<?php

namespace App\Http\Controllers;

use App\formation_programs;
use Illuminate\Http\Request;

class FormationProgramsController extends Controller
{
    public function index()
    {
        $formation=formation_programs::all();
        return view('cursos.index',compact('formation'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function store(Request $request)
    {
        $formation=formation_programs::create([
            'name'=>$request->input('name'),
            'abbreviation'=>$request->input('abbreviation'),
            ]);
            return redirect()->route('cursos.index');
    }
}
