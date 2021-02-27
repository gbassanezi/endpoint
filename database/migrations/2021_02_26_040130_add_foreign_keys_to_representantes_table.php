<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('representantes', function (Blueprint $table) {
            $table->foreign('fk_lead_id', 'TB_REPRESENTANTES_ibfk_1')->references('Lead_Id')->on('tb_lead_old')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('representantes', function (Blueprint $table) {
            $table->dropForeign('TB_REPRESENTANTES_ibfk_1');
        });
    }
}
