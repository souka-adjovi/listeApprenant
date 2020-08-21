<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;
use App\Apprenant;

class TuteurController extends Controller
{
    public function create(){
        return view('tuteur/form');

    }

    public function liste(){
        $tut= Tuteur::All();
        return view('tuteur/liste',['tuteur'=>$tut]);

    }

    public function store(Request $request){
        $tuteur=Tuteur::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'profession'=>$request->profession,
            'telephone'=>$request->telephone,
         ]);
         return back();
    }

    public function update(){

    }

    public function delete(){

    }
}
