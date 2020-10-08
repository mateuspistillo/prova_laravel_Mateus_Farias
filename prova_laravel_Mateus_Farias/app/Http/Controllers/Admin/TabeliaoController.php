<?php

namespace App\Http\Controllers\Admin;

use App\Tabeliao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabeliaoController extends Controller
{   
    public function index(Request $req)
    {
        //;
        $tabeliaos = Tabeliao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.tabeliaos.index', compact('tabeliaos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.tabeliaos.adicionar');
    }

    public function salvar(Request $req)
    {
        $tabeliao = $req->all();

        Tabeliao::create($tabeliao);

        $req->session()
        ->flash('mensagem', "Tabeliao $req->nome adicionado com sucesso");
    
    return redirect()->route('admin.tabeliaos');
    }

    public function editar($id)
    {
        
        $tabeliao = Tabeliao::find($id);
        return view('admin.tabeliaos.editar', compact('tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        $tabeliao = $req->all();

        $tabSelecionado = Tabeliao::find($id);
        $tabSelecionado->update($tabeliao);

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao atualizado com sucesso"
            );

        return redirect()->route('admin.tabeliaos');
    }

    public function deletar(Request $req, $id)
    {
        $tabeliao = Tabeliao::find($id);
        $tabeliao->delete();

            $req->session()
            ->flash(
                'mensagem',
                "Tabeliao $tabeliao->nome removido com sucesso"
            );

            return redirect()->route('admin.tabeliaos');            
    }
}