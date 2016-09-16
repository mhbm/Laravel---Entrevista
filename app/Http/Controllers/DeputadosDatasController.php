<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

use Test\Http\Requests;

use Illuminate\Database\Seeder;

class DeputadosDatasController extends Controller
{
    //
    function getAllDeputadosDatas(){
      $deputados = \DB::table('deputados')->get();
      $deputadosDatas = [];
      foreach ($deputados as $deputado){
        $url = "http://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/$deputado->numero/datas";
        $deputadosDatas[] = simplexml_load_file($url); //retrieve URL and parse XML content
      }
      return $deputadosDatas;
    }
}
