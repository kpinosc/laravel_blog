<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodos
    public function index(){
        return view("cursos.index");
    }
    public function create(){   
        return view("cursos.create");
    }
    public function show($curso){
        return view("cursos.show",compact('curso'));
    }
    public function edit($curso){
        return view("cursos.edit",compact('curso'));
    }
}
