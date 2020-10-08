<?php

namespace App\Http\Controllers\Admin;

use App\Contrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratoController extends Controller
{   
    public function index(Request $req)
    {
        //;
        $contratos = Contrato::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.contratos.index', compact('contratos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.contratos.adicionar');
    }

    public function salvar(Request $req)
    {
        $contrato = $req->all();

        Contrato::create($contrato);

        $req->session()
        ->flash('mensagem', "Contrato $req->nome adicionado com sucesso");
    
    return redirect()->route('admin.contratos');
    }

    public function editar($id)
    {
        
        $contrato = Contrato::find($id);
        return view('admin.contratos.editar', compact('contrato'));
    }

    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();

        $contratoSelecionado = Contrato::find($id);
        $contratoSelecionado->update($contrato);

        $req->session()
            ->flash(
                'mensagem',
                "Contrato atualizado com sucesso"
            );

        return redirect()->route('admin.contratos');
    }

    public function deletar(Request $req, $id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();

            $req->session()
            ->flash(
                'mensagem',
                "Contrato $contrato->nome removido com sucesso"
            );

            return redirect()->route('admin.contratos');            
    }
}