<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeputadosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testNomeDeputadosAfastaram()
    {
      //Nome dos deputados que se afastaram presentes nesse link : http://dadosabertos.almg.gov.br/ws/deputados/que_se_afastaram
      $nomeDeputados = ['Carlos Henrique','Fábio Cherem','Ricardo Faria','Sávio Souza Cruz'];
      foreach ($nomeDeputados as $nomeDeputado){
          $this->visit('/deputados')
               ->see($nomeDeputado);
      }
    }

    public function testAlgunsNomeDeputadosEmExercicio()
    {
      //Nome dos deputados em exericio presentes nesse link : http://dadosabertos.almg.gov.br/ws/deputados/em_exercicio
      $nomeDeputados = ['Doutor Jean Freire','Iran Barbosa','Missionário Marcio Santiago','Neilando Pimenta'];
      foreach ($nomeDeputados as $nomeDeputado){
          $this->visit('/deputados')
               ->see($nomeDeputado);
      }
    }

    public function testSiglaPartidos()
    {
      //Siglas dos partidos presentes nesse link : http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados
      $partidos = ['DEM', 'PC DO B','PDT','PEN','PHS','PMDB','PP','PPS','PR','PRB','PROS','PSB','PSC','PSD','PSDB','PT','PT DO B','PTB','PTC','PV','REDE'];
      foreach ($partidos as $partido){
          $this->visit('/deputados')
               ->see($partido);
      }
    }

    public function testAlgunsNumerosDeputados()
    {
      //Numero dos deputados presentes nesse link : http://dadosabertos.almg.gov.br/ws/deputados/em_exercicio
      $numeros = [9652,22531,3667,18848,2267,18867,22616];
      foreach ($numeros as $numero){
          $this->visit('/deputados')
               ->see($numero);
      }
    }


}
