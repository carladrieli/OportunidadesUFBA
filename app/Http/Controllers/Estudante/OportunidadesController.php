<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Oportunidade;
use Validator;
use Auth;

class OportunidadesController extends Controller
{

    use AuthenticatesAndRegistersUsers;

    protected $redirectPath = 'painel/empresa/oportunidades/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $oportunidades = Oportunidade::paginate(15);
      return view ('empresa.oportunidades.index', compact('oportunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('empresa.oportunidades.nova');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oportunidade = new Oportunidade;
        $oportunidade->usuario_id = Auth::user()->id;
        $oportunidade->titulo = $request->get('titulo');
        $oportunidade->descricao = $request->get('descricao');
        $oportunidade->cargaHoraria = $request->get('cargaHoraria');
        $oportunidade->valor = $request->get('valor');
        $oportunidade->data_inicio_selecao = $request->get('data_inicio_selecao');
        $oportunidade->data_fim_selecao = $request->get('data_fim_selecao');
        

        $oportunidade->save();

        return redirect($this->redirectPath());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
