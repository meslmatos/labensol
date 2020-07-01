<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    public function aluno(){
        return $this->belongsTo('App/Cliente');
    }
}
