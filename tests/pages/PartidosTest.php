<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PartidosTest extends TestCase
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

    public function testNomePartidos()
    {
      //Nome dos partidos presentes nesse link : http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados
      $nomePartidos = ['Partido do Movimento Democrático Brasileiro', 'Partido dos Trabalhadores', 'Partido da Social Democracia Brasileiro', 'Partido Verde', 'Partido Socialista Brasileiro', 'Partido Social Democrático', 'Partido Democrático Trabalhista', 'Partido Trabalhista Brasileiro', 'Partido Progressista', 'Democratas', 'Partido Comunista do Brasil', 'Partido Popular Socialista', 'Partido da República', 'Partido Republicano Brasileiro', 'Partido Trabalhista do Brasil', 'Partido Ecológico Nacional', 'Partido Humanista da Solidariedade', 'Partido Republicano da Ordem Social', 'Partido Social Cristão', 'Partido Trabalhista Cristão', 'Rede Sustentabilidade','DEPUTADOS SEM PARTIDO'];

      foreach ($nomePartidos as $nomePartido){
          $this->visit('/partidos')
               ->see($nomePartido);
      }
    }

    public function testNumeroPartidos()
    {
      //Numeros dos partidos presentes nesse link : http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados
      $numerosPartidos = [15,13,45,43,40,41,12,14,11,91,65,23,92,10,70,51,31,93,20,36,96,1];

      foreach ($numerosPartidos as $numeroPartido){
          $this->visit('/partidos')
               ->see($numeroPartido);
      }
    }

    public function testSiglaPartidos()
    {
      //Siglas dos partidos presentes nesse link : http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados
      $partidos = ['DEM', 'PC DO B','PDT','PEN','PHS','PMDB','PP','PPS','PR','PRB','PROS','PSB','PSC','PSD','PSDB','PT','PT DO B','PTB','PTC','PV','REDE','SEMPARTIDO'];

      foreach ($partidos as $partido){
          $this->visit('/partidos')
               ->see($partido);
      }
    }

    public function testQtdDeputadosPartidos(){
      //Quantidade de deputados dos partidos presentes nesse link : http://dadosabertos.almg.gov.br/ws/representacao_partidaria/partidosDeputados
      $qtdDeputados = [1,2,3,4,5,7,8,9,13];

      foreach ($qtdDeputados as $qtd){
          $this->visit('/partidos')
               ->see($qtd);
      }
    }

}
