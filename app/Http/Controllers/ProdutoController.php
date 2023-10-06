<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests\ProdutosRequest;
use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = Produto::all();
        // returnar alguma view
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)){
            return "<h1>Esse produto não existe</h1>";
        }
        // returnar alguma view
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        // returnar alguma view
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request){
        // pegar dados do formulario
        Produto::create($request->all());
        // returnar alguma view
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remover($id){
        $produto = Produto::find($id);
        $produto->delete();
        // returnar alguma view
        return redirect()->action('ProdutoController@lista');
    }
}
