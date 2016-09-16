<?php

namespace Test;

use Illuminate\Database\Eloquent\Model;

class VerbasIndenizatorias extends Model
{
    //
    protected $fillable = ['codTipoDespesa', 'idDeputado', 'dataReferencia', 'valor', 'descTipoDespesa'];

    function deputado(){
      return $this->belongsTo('Test\Deputados');
    }

    function dataReferencia(){
      return $this->belongsTo('Test\DeputadosDatas');
    }
}
