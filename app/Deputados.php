<?php

namespace Test;

use Illuminate\Database\Eloquent\Model;

class Deputados extends Model
{
    //
    protected $fillable = ['numero', 'nome', 'partido', 'tagLocalizacao'];
}
