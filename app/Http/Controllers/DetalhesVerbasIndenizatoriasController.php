<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

use Test\Http\Requests;

class DetalhesVerbasIndenizatoriasController extends Controller
{
    //
    function getAllDetalhesVerbasIndenizatorias(){
      $teste = new VerbasIndenizatoriasController();
      $resumoVerba = $teste->getAllVerbasDeputados();
      $arrayDetalheVerbas = [];
      foreach($resumoVerba as $listaDetalheVerba){
        foreach($listaDetalheVerba as $detalheVerba){
          $arrayDetalheVerbas[] = $detalheVerba->listaDetalheVerba->detalheVerba;
        }
      }
      return $arrayDetalheVerbas;
    }

    public function getDeputadosMaisGastaram($listaCategoria){
      $deputadosGastaramCategoria = [];
        for($i=0; $i< count($listaCategoria); $i++){
          $codTipoDespesa =$listaCategoria[$i]->codTipoDespesa ;
          $deputadosGastaramCategoria[] = \DB::table('detalhes_verbas_indenizatorias')
          ->join("deputados", 'deputados.numero', '=', 'detalhes_verbas_indenizatorias.idDeputado')
          ->select(\DB::raw('SUM(detalhes_verbas_indenizatorias.valorReembolsado) as total_reembolsado'), 'deputados.nome', 'detalhes_verbas_indenizatorias.codTipoDespesa')
          ->where('codTipoDespesa', '=', $codTipoDespesa)
          ->groupBy('deputados.nome','detalhes_verbas_indenizatorias.codTipoDespesa')
          ->orderBy('total_reembolsado', 'desc')
          ->limit(5)
          ->get();
        }
      return $deputadosGastaramCategoria;
    }

}
