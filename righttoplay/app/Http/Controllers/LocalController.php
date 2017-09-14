<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;
use App\Local;

class LocalController extends Controller
{
	public function index() {
		$locais = Local::join('provincias','provincias.id','=','locais.provincia_id')
			->select('locais.*','provincias.name as provincianame','provincias.regiao')
			->orderBy('locais.id','DESC')
			->get();
		return view('local.index', compact('locais'), ['provincias'=>Provincia::pluck('name','id')]);
	}

	public function create() {
		return view('local.create', ['provincias'=>Provincia::pluck('name','id')]);
	}

	public function store(Request $request) {
		if($request->ajax()) {
	    		$local = new Local();
	    		$local['name'] = $request->name;
	    		$local['provincia_id'] = $request->provincia_id;

	    		if($local->save()) {
	    			return response(['msg'=>'inserted successfully']);
	    		}
	    	}
	}
}
