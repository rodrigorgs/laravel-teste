<?php

namespace App\Http\Controllers;

use App\ReuniaoColegiado;
use Illuminate\Http\Request;

class ReuniaoColegiadoController extends Controller
{
    /**
     *Inicialização da tela de Reunião do Colegiado
    **/
    public function index()
    {
      
      //$data['listaProcessos'] =DB::table('users')->get();
      $data['listaProcessos'] =collect(array(['numero'=>'23066.059453/2017-30','interessado'=>'Danilo Santos','curso'=>'Sistema de Informação','curriculo'=>'2012.2','observacao'=>'DISCIPLINA FCHC45'],
                                       ['numero'=>'23066.034560/2017-55','interessado'=>'Liliane Fiuza','curso'=>'Sistema de Informação','curriculo'=>'2012.2','observacao'=>'APROVEITAMENTO DE ESTUDOS'])
                                      );
     //dd($data['listaProcessos']);
       $data['page_title'] = 'Consultar Reunião Colegiado';
        return view('reuniao_colegiado.index')->with($data);
    }

    /**
    *Buscar Reunião Colegiado por Data
    **/
    public function buscarReuniao(Request $request)
    {
      echo 'jesus cristo';
        $teste = 'Teste'; 
        dd($teste);
      return view('reuniao_colegiado.index')->with($data);
    }
    
    public function exibirCadastro()
    {
      
      //$data['listaProcessos'] =DB::table('users')->get();
      $data['listaProcessos'] =collect(array(['numero'=>'23066.059453/2017-30','interessado'=>'Danilo Santos','curso'=>'Sistema de Informação','curriculo'=>'2012.2','observacao'=>'DISCIPLINA FCHC45'],
                                       ['numero'=>'23066.034560/2017-55','interessado'=>'Liliane Fiuza','curso'=>'Sistema de Informação','curriculo'=>'2012.2','observacao'=>'APROVEITAMENTO DE ESTUDOS'])
                                      );
     //dd($data['listaProcessos'][0]['id'] );
       $data['page_title'] = 'Cadastrar Reunião Colegiado';
        return view('reuniao_colegiado.cadastro')->with($data);
    }
  
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data['page_title'] = 'Cadastrar usuário - Professor';
        return view('teacher.create_edit')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function salvar(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function excluir(Teacher $teacher)
    {
        //
    }
}
