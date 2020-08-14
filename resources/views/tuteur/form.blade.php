@extends('layouts/integrer')
    <div class="container">
    <form action="{{url('formtuteur')}}" method="post">
               @csrf
               <h1 class="text-center">TUTEUR</h1>
                       <div class="form-group col-md-11">
                           <label for="make">Nom:</label>
                           <input type="text" name="nom" id="make" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                           <label for="model">Prénom:</label>
                           <input type="text" name="prenom" id="model" class="form-control">
                       </div>
                       <div class="form-group col-md-11">
                         <label for="model">Profession:</label>
                         <input type="date" name="profession" id="model" class="form-control">
                       </div>
                     <div class="form-group col-md-11">
                         <label for="model">Téléphone:</label>
                         <input type="text" name="telephone" id="model" class="form-control">
                     </div>
                    <div class="d-flex row form-group mt-2">
                       <div class="form-group col-md-11 text-center "> <br>
                        <button type="submit" class="btn btn-success ">Enrégistrer</button>
                        <button type="reset" class="btn btn-danger ">Annuler</button>
                       </div>
                     </div>
             </form>
            </div>  
 