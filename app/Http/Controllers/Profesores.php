<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesoresModel;
use Illuminate\Support\Facades\DB;



class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado',['profesores' => $profesores]);
    }

    public function form_registro(){
        return view('profesores.form_registro');
    }

    public function registrar(Request $r){
        $profesores = new ProfesoresModel();
        $profesores->codprofesor = $r->input('codprofesor');
        $profesores->nomprofesor = $r->input('nomprofesor');
        $profesores->catprofesor = $r->input('catprofesor');
        $profesores ->save();
        return redirect()->route('listadoProf');
    }

    public function eliminar($id){
        $profesores = ProfesoresModel::findOrfail($id);
        $profesores->delete();
        return redirect()->route('listadoProf');
    }

    public function form_editar($id){
        $profesores = ProfesoresModel::findOrfail($id);
        return view('Profesores.form_editar',['profesores' => $profesores]);
    }

    public function editar(Request $e, $id){
        $profesores = profesoresModel::findOrfail($id);
        $profesores->codprofesor = $e->input('codprofesor');
        $profesores->nomprofesor = $e->input('nomprofesor');
        $profesores->catprofesor = $e->input('catprofesor');
        $profesores ->save();
        return redirect()->route('listadoProf');
    }

}
