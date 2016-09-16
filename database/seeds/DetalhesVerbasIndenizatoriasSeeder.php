<?php

use Illuminate\Database\Seeder;
use Test\Http\Controllers\DetalhesVerbasIndenizatoriasController;

class DetalhesVerbasIndenizatoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $detalhesCTRL = new DetalhesVerbasIndenizatoriasController();
        $listaDetalheVerba = $detalhesCTRL->getAllDetalhesVerbasIndenizatorias();
        foreach($listaDetalheVerba as $detalheVerba){
            DB::table('detalhes_verbas_indenizatorias')->insert([
              'id' => $detalheVerba->id,
              'idDeputado' => $detalheVerba->idDeputado,
              'dataReferencia' => $detalheVerba->dataReferencia,
              'valorReembolsado' => $detalheVerba->valorReembolsado,
              'dataEmissao' => $detalheVerba->dataEmissao,
              'cpfCnpj' => $detalheVerba->cpfCnpj,
              'valorDespesa' => $detalheVerba->valorDespesa,
              'nomeEmitente' => $detalheVerba->nomeEmitente,
              'descDocumento' => $detalheVerba->descDocumento,
              'codTipoDespesa' => $detalheVerba->codTipoDespesa,
              'descTipoDespesa' => $detalheVerba->descTipoDespesa,
              'created_at' => date("Y-m-d H:i:s")
        ]);
      }
    }
}
