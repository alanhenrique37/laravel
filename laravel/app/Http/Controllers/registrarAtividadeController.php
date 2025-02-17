<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAgenda;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = modelAgenda::all();//trazendo todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');


        $model = new modelAgenda();
        $model->dataEvento = $data;
        $model->descricao = $descricao;
        
        $model->save();//Armazenar no banco

        return redirect('/cadastrar');
    }

    public function consultar(){
        $ids = modelAgenda::all();
        return view('paginas.consultar', compact('ids'));
    }

    public function editar($id){
        $dado = modelAgenda::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }

    public function atualizar(Request $request, $id){
        modelAgenda::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }

    public function excluir(Request $request, $id){
        modelAgenda::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }

}//Todas as operações do banco de dados
