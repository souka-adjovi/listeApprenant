@extends('layouts/integrer')
<div class="d-flex row form-group mt-2">
  <div class="form-group col-md-11 text-center "> <br>
      <a href="{{url('/')}}"><button type="" class="btn btn-success w-40 ">Retour</button></a>
      </div>
      </div>
<table class="table table-borderer py-4">
    <thead>
        <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Date de Naissance</th>
        <th scope="col">Ville d'origine</th>
        <th scope="col">Formation</th>
        {{-- <th>Etablissement Précedent</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Genre</th>
        <th>Photo</th> --}}
        <th>Modifier</th>
        <th>Détail</th>
        <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($apprenant as $item)
          
        <tr>
        <td>{{$item->nom}}</td>
        <td>{{$item->prenom}}</td>
        <td>{{$item->dateNaissance}}</td>
        <td>{{$item->villeDorigine}}</td>
        <td>{{$item->formation}}</td>
        <td> <a href="{{url('vuedit/' .$item->id)}}"> <button class="btn btn-primary"> Modifier</button></a> </td>
        <td><a href="{{url('detailApp/' .$item->id)}}"><button  class="btn btn-warning">Détail</button></a></td>
        <td><a href="{{url('supprimer/' .$item->id)}}"><button  class="btn btn-danger">Supprimer</button></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>