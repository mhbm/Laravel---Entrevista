<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerbasindenizatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbas_indenizatorias', function (Blueprint $table) {
            $table->integer('codTipoDespesa');
            $table->integer('idDeputado'); //chave estrangeira
            $table->string('dataReferencia', 10); //chave estrangeira
            $table->float('valor');
            $table->string('descTipoDespesa', 150);
            $table->foreign('idDeputado')
                ->references('numero')
                ->on('deputados')
                ->onDelete('cascade');
            $table->foreign('dataReferencia')
                ->references('dataReferencia')
                ->on('deputados_datas')
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
        Schema::dropIfExists('verbas_indenizatorias');
    }
}
