<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
	public function index() {
		return view('professor.index');
	}

	public function create() {
		return view('professor.create');
	}

    public function store(Request $request) {
        if($request->ajax()) {
            $professor = new Professor();

            $professor['nome'] = $request->name;
            $professor['genero'] = $request->genero;
            $professor['anos_professor'] = $request->anosProfessor;
            $professor['anos_imp_rtp'] = $request->implementaRTP;
            $professor['formacao'] = $request->formacao.', '.$request->outraForm;
            $professor['form_exercicio'] = $request->formExerc;
            $professor['form_cott_rtp'] = $request->formCottRtp;
            $professor['form_cott_periodo'] = $request->formacaoCottPeriodo;
            $professor['orientar'] = $request->orientar;

            return response($professor);
        }
    }
}
