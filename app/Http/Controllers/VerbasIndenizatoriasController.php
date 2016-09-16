<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

use Test\Http\Requests;

class VerbasIndenizatoriasController extends Controller
{
    //
    private $gastoTotalListaCategoria;
    private $deputadosGastaramCategoria;

    public function getAllVerbasDeputados(){
      $deputados = \DB::table('deputados_datas')->get();
      $resumoVerba = [];
      foreach ($deputados as $deputado){
        $data = explode("-",$deputado->dataReferencia);
        $ano = $data[0];
        $mes = $data[1];
        $url = "http://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/$deputado->idDeputado/$ano/$mes";
        $resumoVerba[] = simplexml_load_file($url); //retrieve URL and parse XML content
      }
      return $resumoVerba;
    }

    public function getGastoTotalListaCategoria(){
      $this->gastoTotalListaCategoria = \DB::table('verbas_indenizatorias')
           ->select(\DB::raw('SUM(valor) as total_gasto'), 'codTipoDespesa')
           ->whereBetween('dataReferencia', ['2015-01-01', '2015-12-31'])
           ->groupBy('codTipoDespesa')
           ->orderBy('total_gasto', 'desc')
           ->get();
           return $this->gastoTotalListaCategoria;
    }

    public function getDeputadosGastoVerbaCategoria(){
        $detalhesVerbasCTRL = new DetalhesVerbasIndenizatoriasController;
        $this->deputadosGastaramCategoria = $detalhesVerbasCTRL->getDeputadosMaisGastaram($this->gastoTotalListaCategoria);
        return $this->deputadosGastaramCategoria;
    }

    public function index() {
      $gastoTotalListaCategoria = $this->getGastoTotalListaCategoria();
      $deputadosGastaramCategoria = $this->getDeputadosGastoVerbaCategoria();
      return view('pages/gastoverbas', compact('gastoTotalListaCategoria', 'deputadosGastaramCategoria'));

    }
}
