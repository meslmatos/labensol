<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public function projeto(){
        return $this->hasOne('App\Projeto');
    }
}
