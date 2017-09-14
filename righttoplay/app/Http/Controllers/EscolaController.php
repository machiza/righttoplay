<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;
use App\Local;
use App\Escola;

class EscolaController extends Controller
{ 
	public function index() {
		// $escolas = Local::join('provincias','provincias.id','=','locais.provincia_id')
		// 	->select('locais.*','provincias.name as provincianame','provincias.regiao')
		// 	->orderBy('locais.id','DESC')
		// 	->get();
		$escolas = Escola::join('locais','locais.id','=','escolas.local_id')
			->join('provincias','provincias.id','=','locais.provincia_id')
			->select('escolas.*','locais.name as localname','provincias.name as provincianame','provincias.regiao')
			->get();
		return view('escola.index', compact('escolas'));
	}

	public function create() {
		return view('escola.create', ['provincias'=>Provincia::pluck('name','id')]);
	}

	// public function locais(Request $request, $id) {
	// 	if($request->ajax()) {
	// 		$locais = Local::locais(2);
	// 		return response()->json($locais);
	// 	}
	// }

	public function store(Request $request) {
		if($request->ajax()) {
			$escola = new Escola();
			$escola['name'] = $request->name;
			if($request->nivel === "0") {
				$escola['nivel'] = 'Basico';
			}else{
				$escola['nivel'] = 'Medio';
			}
			$escola['local_id'] = $request->local_id;

			if($escola->save()) {
	                return response(['msg'=>'inserted successfully']);
	            }
		}
	}

	public function show(Request $request, $id) {
		if($request->ajax()) {
			$locais = Local::locais($id);
			return response()->json($locais);
		}
	}
}
