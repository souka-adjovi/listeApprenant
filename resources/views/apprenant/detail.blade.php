@extends('layouts/integrer')
<div class="card-deck">
    <div class="card">
      <div class="card-deck">
        <div class="card">
        <img src="{{asset('storage').'/'.$apprenant->photo}}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title text-center">Détail de l'apprenant {{$apprenant->nom}}</h5>
            <p class="card-text">Nom: {{$apprenant->nom}}</p>
            <p class="card-text">Prénom: {{$apprenant->prenom}}</p>
            <p class="card-text">Tuteur: {{$apprenant->Tuteur->nom}}</p>
            <p class="card-text">Date de Naissance: {{$apprenant->dateNaissance}}</p>
            <p class="card-text">Ville d'Origine: {{$apprenant->villeDorigine}}</p>
            <p class="card-text">Formation: {{$apprenant->formation}}</p>
            <p class="card-text">Etablissement Précedent: {{$apprenant->etablissementPrecedent}}</p>
            <p class="card-text">Téléphone: {{$apprenant->telephone}}</p>
            <p class="card-text">EMail: {{$apprenant->email}}</p>
            <p class="card-text">Genre: {{$apprenant->genre}}</p>
            {{-- <p class="card-text">Photo: {{$apprenant->photo}}</p> --}}
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
  </div>