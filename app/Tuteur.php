<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    protected $guarded=[];
    public function Apprenant(){
        return $this->belongsTo(Apprenant::class);
    }
}
