<?php

namespace App\Http\Controllers\Oportunidade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Oportunidade;
use App\OportunidadeCurso;
use App\OportunidadeCandidato;
use App\Curso;
use Validator;
use Auth;

class OportunidadeController extends Controller
{

    use AuthenticatesAndRegistersUsers;

    protected $redirectPath = 'painel/oportunidade/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { if(Auth::user()->isAluno()){

        $oportunidades = Oportunidade::all();

        $oportunidades = Oportunidade::paginate(15);
        return view ('oportunidade.indexAluno', compact('oportunidades'));
    }
    $oportunidades = Oportunidade::where('usuario_id', Auth::user()->id)->with('cursos')->get();

    $oportunidades = Oportunidade::paginate(15);
    return view ('oportunidade.index', compact('oportunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view ('oportunidade.novaOportunidade', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos_checked = $request->get('curso');


        $oportunidadecurso = new OportunidadeCurso;         

        $oportunidade = new Oportunidade;
        $oportunidade->usuario_id = Auth::user()->id;
        $oportunidade->titulo = $request->get('titulo');
        $oportunidade->descricao = $request->get('descricao');
        $oportunidade->cargaHoraria = $request->get('cargaHoraria');
        $oportunidade->valor = $request->get('valor');
      

        //$oportunidade->save();


        if ($oportunidade->save()) { $cursos_checked = $request->get('curso'); $oportunidade->cursos()->sync($cursos_checked); };

        

        return redirect('painel/oportunidadeAluno/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function candidatar($id)
    {
        $oportunidadecandidato = new OportunidadeCandidato;  

        $oportunidadecandidato->usuario_id = Auth::user()->id;
        $oportunidadecandidato->oportunidade_id = $id;

        $oportunidadecandidato->save();

        return redirect($this->redirectPath());   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oportunidades = Oportunidade::where('id', $id)->with('cursos')->get();
        $oportunidade = Oportunidade::findOrFail($id);
        
    
        return view('oportunidade.editarOportunidade')->with('oportunidade', $oportunidade);
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
        $oportunidade = Oportunidade::findOrFail($id);

        $oportunidade->titulo = $request->get('titulo');
        $oportunidade->descricao = $request->get('descricao');
        $oportunidade->cargaHoraria = $request->get('cargaHoraria');
        $oportunidade->valor = $request->get('valor');
        

        $oportunidade->save();

        return redirect($this->redirectPath());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oportunidade = Oportunidade::findOrFail($id);
        $oportunidade->delete();
        return redirect($this->redirectPath());
    }
}
