<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data=[];

        //buscar produtos
        //select * from produtos
        $listaProdutos = Produto::all();
        $data['lista'] = $listaProdutos;
        return view("home", $data);
    }

    public function categoria( Request $request, $idcategoria = 0){
        $data=[];
        //select * from categorias
        $listaCategorias = Categoria::all();
        //select * from produtos limit 4
        $queryProdutos = Produto::limit(8);

        if($idcategoria != 0){
            //where categoria_id = $idcategoria
            $queryProdutos->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProdutos->get();

        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        $data['idcategoria'] = $idcategoria;
        return view("categoria", $data);
    }
    public function adc_carrinho(Request $request, $idproduto = 0){
        //buscar produto pelo id
        $prod = Produto::find($idproduto);

        if($prod){


            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }
        return redirect()->route('home');
    }
    public function vercarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart'=> $carrinho];
        return view('carrinho', $data);
    }
    public function excluircarrinho( $indice, Request $request){
        $carrinho = session('cart',[]);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }
}
