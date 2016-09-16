<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalhesverbasindenizatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalhes_verbas_indenizatorias', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idDeputado'); //chave estrangeira
            $table->string('dataReferencia',10);
            $table->float('valorReembolsado');
            $table->string('dataEmissao',10);
            $table->integer('cpfCnpj');
            $table->float('valorDespesa');
            $table->string('nomeEmitente', 150);
            $table->integer('descDocumento');
            $table->integer('codTipoDespesa'); //chave estrangeira
            $table->string('descTipoDespesa', 250);
            $table->foreign('idDeputado')
                ->references('numero')
                ->on('deputados')
                ->onDelete('cascade');
            $table->foreign('codTipoDespesa')
                ->references('codTipoDespesa')
                ->on('verbasindenizatorias')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalhes_verbas_indenizatorias');
    }
}
