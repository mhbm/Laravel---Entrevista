<?php

namespace Test;

use Illuminate\Database\Eloquent\Model;

class DetalhesVerbasIndenizatorias extends Model
{
    //
    protected $fillable = ['id', 'idDeputado', 'dataReferencia', 'valorReembolsado', 'dataEmissao', 'cpfCnpj', 'valorDespesa', 'valorDespesa', 'nomeEmitente', 'descDocumento','codTipoDespesa', 'descTipoDespesa'];

    function deputado(){
      return $this->belongsTo('Test\Deputados');
    }

    function verbas(){
      return $this->belongsTo('Test\VerbasIndenizatorias');
    }
}
