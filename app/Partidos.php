<?php

namespace Test;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    //
    protected $fillable = ['numero', 'sigla', 'nome', 'qtdeDeputados'];

}
