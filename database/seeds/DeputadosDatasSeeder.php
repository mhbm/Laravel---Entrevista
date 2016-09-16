<?php

use Illuminate\Database\Seeder;
use Test\Http\Controllers\DeputadosDatasController;

class DeputadosDatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $deputadosDatasAll = new DeputadosDatasController();
        $deputados = $deputadosDatasAll->getAllDeputadosDatas();
        foreach($deputados as $deputado){
            DB::table('deputados_datas')->insert([
              'idDeputado' => $deputado->fechamentoVerba->idDeputado,
              'dataReferencia' => $deputado->fechamentoVerba->dataReferencia,
              'created_at' => date("Y-m-d H:i:s")
        ]);
      }
    }
}
