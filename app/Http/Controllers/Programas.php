<?php

namespace App\Http\Controllers;

use App\Models\ProgramasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado',['programas' => $programas]);
    }

    public function form_registro(){
        return view('programas.form_registro');
    }

    public function registrar(Request $r){

        $programa = new ProgramasModel();
        $programa->codprograma = $r->input('codprograma');
        $programa->nomprograma = $r->input('nomprograma');
        $programa->facultad = $r->input('facultad');
        $programa ->save();
        return redirect()->route('listadoPro');
    }

    public function eliminar($id){
        $programa = ProgramasModel::findOrfail($id);
        $programa->delete();
        return redirect()->route('listadoPro');
    }

    public function form_editar($id){
        $programas = ProgramasModel::findOrfail($id);
        return view('Programas.form_editar',['programas' => $programas]);
    }

    public function editar(Request $e, $id){
        $programas = ProgramasModel::findOrfail($id);
        $programas->codprograma = $e->input('codprograma');
        $programas->nomprograma = $e->input('nomprograma');
        $programas ->save();
        return redirect()->route('listadoPro');
    }




}
