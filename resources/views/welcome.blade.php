@extends('layouts/integrer')
<h1 class="text-center">Bienvenu!!</h1>
        <div class="row row-cols-1 row-cols-md-2 py-4">
           <div class="col mb-4">
              <div class="card">
                <img src="images/apprenant.JPG" class="card-img-top" alt="image apprenant"  width="100%" height="50%">
                <div class="card-body">
                  <h5 class="card-title">Apprenant</h5>
                </div>
                <div>
                <a href="{{url('forme')}}"><button class="btn btn-primary mb-2">Ajouter</button></a>
                <a href="{{url('listeApp')}}"><button class="btn btn-success mb-2">Liste</button></a>
                </div>

              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <img src="images/tuteur.JPG" class="card-img-top" alt="..."  width="100%" height="380px">
                <div class="card-body">
                  <h5 class="card-title">Tuteur</h5>
                </div>
                <div>
                    <a href="{{url('form')}}"><button class="btn btn-primary mb-2">Ajouter</button></a>
                    <a href="{{url('listeTut')}}"><button class="btn btn-success mb-2">Liste</button></a>
                </div>
              </div>
            </div>
        </div>
        
       
