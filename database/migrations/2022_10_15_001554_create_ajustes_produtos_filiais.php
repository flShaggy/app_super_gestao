<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjustesProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filiais', 30);
            $table->timestamps();
        });

        Schema::create('ajuste_produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque');
            $table->timestamps();
            
            
            //constraint
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

        });
        Schema::table('produtos', function(Blueprint $table){
            $table->dropColumn(['preco_venda','estoque']);
         });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table){
           $table->decimal('preco_venda', 8, 2);
           $table->decimal('estoque');
        });

        Schema::dropIfExists('ajuste_produto_filiais');

        Schema::dropIfExists('filiais');

        
        
    }
}

