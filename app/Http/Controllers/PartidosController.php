<?php

namespace Test\Http\Controllers;

use Illuminate\Http\Request;

use Test\Http\Requests;

class PartidosController extends Controller
{
    //
    function getAllPartidos(){
      $url = 'http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados';
      $partidos = simplexml_load_file($url); //retrieve URL and parse XML content
      return $partidos;
    }

    public function index() {
      $partidos = \DB::table('partidos')->get();
      return view('pages/partidos', compact('partidos'));
    }
}
