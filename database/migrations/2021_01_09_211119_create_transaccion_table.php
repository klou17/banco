<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccion', function (Blueprint $table) {
            $table->increments('nroTransaccion');
            $table->dateTime('fecTransaccion');
            $table->double('importe');
            $table->char('dni', 8);
            $table->char('nroSerTransaccion', 6);
            $table->integer('codEntidad');
            $table->integer('codTipo');
            
            
            $table->foreign('dni')->references('dni')->on('clientes');
            $table->foreign('codEntidad')->references('codEntidad')->on('entidad');
            // $table->foreign('codTipo')->references('codTipo')->on('tipo_doc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaccion');
    }
}
