<?php

namespace App\Http\Controllers;

use App\Models\Endereço;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
       $data=[]; 
       return view("cadastrar", $data);
    }
    public function cadastrarcliente(Request $request){
        //pegar valores do formulario
        $values = $request->all();
        $usuario = new Usuario();
        //$usuario->cpf - $request->input("cpf","");
        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");
        

        $endereco = new Endereço($values);
        $endereco->logadouro = $request->input("endereco", "");

        try{
            $usuario->save();//salvar usuario
            $endereco->usuario_id = $usuario->id;//relacionamento das tabelas
            $endereco->save();//salvar endereço
        }catch(Exception $e){

        }
        
        

        return redirect()->route("cadastrar");
    }
}
