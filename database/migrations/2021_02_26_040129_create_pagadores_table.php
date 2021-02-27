<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagadores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sacado', 150);
            $table->string('endereco', 150)->nullable();
            $table->string('cidade', 150)->nullable();
            $table->string('estado', 150)->nullable();
            $table->string('cep', 150)->nullable();
            $table->string('cpf_cnpj', 150);
            $table->timestamp('data_vencimento')->useCurrent();
            $table->string('valor', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagadores');
    }
}
