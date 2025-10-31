<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Tarrpt;
use Illuminate\Http\Request;

class RptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $rpt = DB::table("rpt")
                ->whereNotNull("endereco")
                ->where(function($sql) use ($request) {

                   //if ( ($request->versao) == null && ($request->cliente) == null && ($request->segmento) == null && ($request->tela) == null ) {
                   //     return;
                   // }
                   // 
                    if ($request->cliente) {
                        $sql->where("cliente", $request->cliente);
                    } else {
                        $sql->whereNull("cliente"); //unico que pode retornar valor nulo
                    } 
                    if ($request->versao) {
                        $sql->where("versao", $request->versao);
                    } 
                    if ($request->segmento){
                        $sql->where("segmento", $request->segmento);
                    }
                    if ($request->tela) {
                        $sql->where("tela", $request->tela);
                    }
                }) ->paginate(10)->withQueryString();
        
        return view('tarrpt', compact('rpt'));
    }

    /*
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    public function store(Request $request){

        $path = $request->file('file')->store('uploads', 'public'); //up pasta public

        $request->validate([
            'versao'   => 'required|numeric',
            'tela'     => 'nullable|string',
            'segmento' => 'nullable|string',
            'data'     => 'nullable|date',
            'hora'     => 'nullable|string',
            'file'     => 'required|file',
            'cliente'  => 'nullable|string',
        ]);

        //dd($request->all());//para teste do array que retorna

        //atencao, esse tarrpt so era para estar com T maisculo, mas so pega assim
        Tarrpt::create([
            'versao'   => $request->versao,
            'segmento' => $request->segmento,
            'tela'     => $request->tela,
            'data'     => $request->data,
            'hora'     => $request->hora,
            'endereco' => $path, //up pasta public
            'cliente'  => $request->cliente,
        ]);
        return redirect()->back()->with('success', 'Nova linha adicionada na tabela RPT!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
