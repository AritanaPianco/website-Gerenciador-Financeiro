<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('metodo_pagamento_id');
            $table->unsignedBigInteger('transacao_id');
            $table->string('categoria');
            $table->string('valor');
            $table->string('descricao',200);
            $table->string('data_transacao');
            $table->timestamps();

                
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('metodo_pagamento_id')->references('id')->on('metodo_pagamentos');
            $table->foreign('transacao_id')->references('id')->on('tipo_transacaos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transacaos', function (Blueprint $table) {
            $table->dropForeign('transacaos_transacao_id_foreign'); 
            $table->dropForeign('transacaos_metodo_pagamento_id_foreign'); 
            $table->dropForeign('transacaos_user_id_foreign'); 
    
        });
        
        Schema::dropIfExists('transacaos');
    }
}
