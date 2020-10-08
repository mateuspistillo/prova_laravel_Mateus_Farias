<?php

namespace App\Http\Controllers\Admin;

use App\Certidao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{   
    public function index(Request $req)
    {
        //;
        $certidaos = Certidao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.certidaos.index', compact('certidaos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.certidaos.adicionar');
    }

    public function salvar(Request $req)
    {
        $certidao = $req->all();

        Certidao::create($certidao);

        $req->session()
        ->flash('mensagem', "Certidão $req->nome adicionada com sucesso");
    
    return redirect()->route('admin.certidaos');
    }

    public function editar($id)
    {
        
        $certidao = Certidao::find($id);
        return view('admin.certidaos.editar', compact('certidao'));
    }

    public function atualizar(Request $req, $id)
    {
        $certidao = $req->all();

        $certidaoSelecionado = Certidao::find($id);
        $certidaoSelecionado->update($certidao);

        $req->session()
            ->flash(
                'mensagem',
                "Certidão atualizada com sucesso"
            );

        return redirect()->route('admin.certidaos');
    }

    public function deletar(Request $req, $id)
    {
        $certidao = Certidao::find($id);
        $certidao->delete();

            $req->session()
            ->flash(
                'mensagem',
                "Certidão $certidao->nome removida com sucesso"
            );

            return redirect()->route('admin.certidaos');            
    }
}