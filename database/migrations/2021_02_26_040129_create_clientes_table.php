<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome_fantasia', 300)->nullable();
            $table->string('razao_social', 300)->nullable();
            $table->string('rg_ie', 300)->nullable();
            $table->string('conexao', 100)->nullable();
            $table->string('complemento', 300)->nullable();
            $table->string('pais', 300)->nullable();
            $table->string('numero_pedido', 300)->nullable();
            $table->timestamp('data')->nullable()->useCurrent();
            $table->timestamp('data_inicio')->nullable()->useCurrent();
            $table->string('nome', 600)->nullable();
            $table->string('cpf_cnpj', 600)->nullable();
            $table->string('email', 600)->nullable();
            $table->string('telefone', 600)->nullable();
            $table->string('celular', 600)->nullable();
            $table->string('endereco', 600)->nullable();
            $table->string('numero', 600)->nullable();
            $table->string('cidade', 600)->nullable();
            $table->string('estado', 600)->nullable();
            $table->string('bairro', 600)->nullable();
            $table->string('cep', 600)->nullable();
            $table->string('site', 600)->nullable();
            $table->string('interesse', 600)->nullable();
            $table->string('outros_texto')->nullable();
            $table->string('outros', 100)->nullable();
            $table->integer('Lead_Ativo')->default(1);
            $table->string('obs', 999)->nullable();
            $table->string('status', 999)->nullable();
            $table->string('codigo', 999)->nullable();
            $table->string('ramo_atividade', 999)->nullable();
            $table->string('Representante_Id')->nullable();
            $table->string('Contador_Id')->nullable();
            $table->string('valor_mensalidade', 100)->nullable();
            $table->string('valor_comissao', 100)->nullable();
            $table->timestamp('data_comissao')->nullable()->useCurrent();
            $table->integer('confirmado')->nullable();
            $table->timestamp('conf_datahora')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
