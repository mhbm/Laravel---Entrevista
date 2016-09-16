<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

use Test\Http\Requests;

class DeputadosController extends Controller
{
    //
    function getAllDeputados(){
      $url = 'http://dadosabertos.almg.gov.br/ws/deputados/proposicoes/sumario';
      $deputados = simplexml_load_file($url); //retrieve URL and parse XML content
      return $deputados;
    }

    function getAllDeputadosExercicio(){
      $url = 'http://dadosabertos.almg.gov.br/ws/deputados/em_exercicio';
      $deputados = simplexml_load_file($url); //retrieve URL and parse XML content
      return $deputados;
    }

    public function index() {
      $deputados = \DB::table('deputados')->get();
      return view('pages/deputados', compact('deputados'));
    }
}
