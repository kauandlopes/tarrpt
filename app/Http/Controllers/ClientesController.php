<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller{
  
    public function index(Request $request) {

        $rpt = DB::table("cliente")
                ->where(function($sql) use ($request) {
                    if ($request->nome) {
                        $sql->where("nome", $request->nome);
                    } 
                })
                ->orderBy('nome', 'desc')
                ->get();

        return view('modal-criar-clientes', compact('clientes'));
    }

    public function store(Request $request){

        Clientes::create([
            'cnpj'           => $request->cnpj,
            'nome'           => $request->nome,
            'segmento'       => $request->segmento,
            'id_organizacao' => $request->id_organizacao, 
        ]);


        //Para editar o campo
       //$registro = Organizacoes::find(1);
       // if ($registro){
       //     $registro->nome = $novoNome;
       //     $registro->segmento = $novoSeguimento;
//
       //     $registro->save();
       // } 

        return redirect()->back();
    }


}