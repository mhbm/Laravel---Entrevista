<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeputadosdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deputados_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDeputado');
            $table->string('dataReferencia',10);
            $table->foreign('idDeputado')
                ->references('numero')
                ->on('deputados')
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
        Schema::dropIfExists('deputados_datas');
    }
}
