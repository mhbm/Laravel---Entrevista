<?php

use Illuminate\Database\Seeder;
use Test\Http\Controllers\VerbasIndenizatoriasController;

class VerbasIndenizatoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $verbasIndenizatoriasAll = new VerbasIndenizatoriasController();
        $resumoVerba = $verbasIndenizatoriasAll->getAllVerbasDeputados();
        foreach($resumoVerba as $deputadoResumo){

            foreach($deputadoResumo as $deputadoResumoUnique) {

              DB::table('verbas_indenizatorias')->insert([
              'codTipoDespesa' => $deputadoResumoUnique->codTipoDespesa,
              'idDeputado' => $deputadoResumoUnique->idDeputado,
              'dataReferencia' => $deputadoResumoUnique->dataReferencia,
              'valor' => $deputadoResumoUnique->valor,
              'descTipoDespesa' => $deputadoResumoUnique->descTipoDespesa,
              'created_at' => date("Y-m-d H:i:s")
            ]);
        }
      }
    }
}
