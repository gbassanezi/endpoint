<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComercialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercial', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id')->nullable();
            $table->timestamp('vinculacao')->nullable();
            $table->timestamp('ativacao')->nullable();
            $table->timestamp('aplicativo')->nullable();
            $table->timestamp('impressora')->nullable();
            $table->timestamp('contrato')->nullable();
            $table->timestamp('recibos')->nullable();
            $table->timestamp('treinamento')->nullable();
            $table->timestamp('instalacao')->nullable();
            $table->timestamp('boleto_inicio')->nullable();
            $table->timestamp('boleto_fim')->nullable();
            $table->text('group')->nullable();
            $table->timestamp('obs')->nullable();
            $table->string('comentario')->nullable();
            $table->dateTime('data_cadastro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comercial');
    }
}
