<?php

use Illuminate\Database\Seeder;
use Test\Http\Controllers\DeputadosController;

class DeputadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $deputadosAll = new DeputadosController();
        $deputados = $deputadosAll->getAllDeputados();
        foreach($deputados as $deputado){
            DB::table('deputados')->insert([
              'numero' => $deputado->id,
              'nome' => $deputado->nome,
              'partido' => $deputado->partido,
              'created_at' => date("Y-m-d H:i:s")
        ]);
      }
      $deputados = $deputadosAll->getAllDeputadosExercicio();
      foreach($deputados as $deputado){
          DB::table('deputados')->insert([
            'numero' => $deputado->id,
            'nome' => $deputado->nome,
            'partido' => $deputado->partido,
            'created_at' => date("Y-m-d H:i:s")
      ]);
    }
  }
}
