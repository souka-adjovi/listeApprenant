<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;
use App\Apprenant;

class ApprenantController extends Controller
{
    public function create(){
    $recuperer= Tuteur::All();
    $prendre= Apprenant::All();
return view('apprenant/form',['tuteur'=>$recuperer,'apprenant'=>$prendre]);

    }

    public function show(Request $request){
    $app=Apprenant::find($request->id);
    return view('apprenant/detail',['apprenant'=>$app]);
    }

    public function liste(){
  $app= Apprenant::All();
    return view('apprenant/liste',['apprenant'=>$app]);
    }

        public function store(Request $request){
            $apprenant=Apprenant::create([
                'tuteur_id'=>$request->tuteur_id,
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'dateNaissance'=>$request->dateNaissance,
                'villeDorigine'=>$request->villeDorigine,
                'formation'=>$request->formation,
                'etablissementPrecedent'=>$request->etablissementPrecedent,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
                'genre'=>$request->genre,
                'photo'=>$request->photo->store('photos','public'),
            ]);
            return back();

    }
public function Edit($id){
    $recuperer= Tuteur::All();
    $vue=Apprenant::find($id);
return view('apprenant/modifier',['apprenant'=>$vue,'tuteur'=>$recuperer]);

}
    

    public function update(Request $request, $id){
        
$Ajout=Apprenant::find($id);
$Ajout->tuteur_id=$request->tuteur_id;

$Ajout->nom=$request->nom;
$Ajout->prenom=$request->prenom;
$Ajout->dateNaissance=$request->dateNaissance;
$Ajout->villeDorigine=$request->villeDorigine;
$Ajout->formation=$request->formation;
$Ajout->etablissementPrecedent=$request->etablissementPrecedent;
$Ajout->telephone=$request->telephone;
$Ajout->email=$request->email;
$Ajout->genre=$request->genre;
$Ajout->photo=$request->photo;
$Ajout->update();

return redirect('vuedit/'.$id);
    }

    public function destroy($id){
 $supprimer=Apprenant::find($id);
 $supprimer->delete();
 return back();
    }
}
