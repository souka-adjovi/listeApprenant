<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   protected $guarded=[];
   
   public function Tuteur()
   {
    return $this->hasOne(Tuteur::class);
   }

}

