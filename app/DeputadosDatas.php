<?php

namespace Test;

use Illuminate\Database\Eloquent\Model;

class DeputadosDatas extends Model
{
    //
    protected $fillable = ['idDeputado', 'dataReferencia'];

    function deputados(){
      return $this->belongsTo('Test\Deputados');
    }
}
