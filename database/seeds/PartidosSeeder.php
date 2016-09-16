<?php

use Illuminate\Database\Seeder;
use Test\Http\Controllers\PartidosController;


class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $partidosAll = new PartidosController();
        $partidos = $partidosAll->getAllPartidos();
        foreach($partidos as $partido){
            DB::table('partidos')->insert([
              'numero' => $partido->id,
              'sigla' => $partido->sigla,
              'nome' => $partido->nome,
              'qtdeDeputados' => $partido->qtdeDeputados,
              'created_at' => date("Y-m-d H:i:s")
        ]);
      }
    }
}
