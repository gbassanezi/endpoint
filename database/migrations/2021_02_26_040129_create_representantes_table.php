<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ativo')->default(1);
            $table->integer('confirmado')->default(0);
            $table->integer('grupo')->default(2);
            $table->string('cadastro')->nullable();
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('cnpj_cpf')->nullable();
            $table->integer('fk_lead_id')->nullable()->index('fk_lead_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
