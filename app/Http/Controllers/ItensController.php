<?php

namespace App\Http\Controllers;

use App\ItensDispensa;
use Illuminate\Http\Request;
use DB;
use App\Itens;

class ItensController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function verificar(Request $request)
    {
        $get_discpl = DB::table('disciplines')->select('id','name', 'code', 'load')
            ->where('name', '=', [$request->atvc])
            ->where('load', '=', [$request->ch])->get();
            $get_id_curso = DB::table('courses')->select('id')
                ->where('name', '=', [$request->curso])->get();
            if (count($get_discpl) > 0 && count($get_id_curso) > 0) {
                $get_natureza = DB::table('course_disciplines')->select('nature')
                    ->where('course_id', '=', $get_id_curso[0]->id)
                    ->where('discipline_id', '=', $get_discpl[0]->id)->get();
                if (count($get_natureza) == 0){
                    return redirect('/Itens')->with('message', 'Erro! Atividade informada não corresponde ao curso.');
                }
            }
        else{
            return redirect('/Itens')->with('message', 'Erro! Algum campo informado não consta no banco de dados.');
        }
        return view("Itens.ItensDispensa",
           compact("get_discpl", "get_natureza"));
    }
    public function mostrarView(){
        return view('Itens.Itens');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $itensdispensa = new ItensDispensa();
        $itensdispensa = $itensdispensa->fill($data)->toArray();
        $response = ItensDispensa::create($itensdispensa)->toArray();
        return redirect('/Itens')->with($response);

    }
}

