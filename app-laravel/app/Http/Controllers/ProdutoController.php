<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){

        $nome = "romario";
        $valor = 10.00;

        return view('produtoTeste',['nome'=>$nome ,'valor'=>$valor]);

}
    public function show($id){

        return "Apresentando o produto de id: {$id}";
    }

}










