<?php

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new Categoria(["categoria" => "nacional"]);
        $cat->save();

        $prod = new Produto(["nome"=>'Produto1', "valor"=> 10, "foto"=> 'img/produto1.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod->save();

        $prod2 = new Produto(["nome"=>'Produto2', "valor"=> 10, "foto"=> 'img/produto2.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod2->save();

        $prod3 = new Produto(["nome"=>'Produto3', "valor"=> 10, "foto"=> 'img/produto3.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod3->save();

        $prod4 = new Produto(["nome"=>'Produto4', "valor"=> 10, "foto"=> 'img/produto4.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod4->save();

        $prod5 = new Produto(["nome"=>'Produto5', "valor"=> 10, "foto"=> 'img/produto5.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod5->save();

        $prod6 = new Produto(["nome"=>'Produto6', "valor"=> 10, "foto"=> 'img/produto6.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod6->save();

        $prod7 = new Produto(["nome"=>'Produto7', "valor"=> 10, "foto"=> 'img/produto7.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod7->save();

        $prod8 = new Produto(["nome"=>'Produto8', "valor"=> 10, "foto"=> 'img/produto8.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod8->save();

        $prod9 = new Produto(["nome"=>'Produto9', "valor"=> 10, "foto"=> 'img/produto9.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod9->save();

        $prod10 = new Produto(["nome"=>'Produto10', "valor"=> 10, "foto"=> 'img/produto10.jpg', "descricao"=>'', 'categoria_id'=>$cat->id]);
        $prod10->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
