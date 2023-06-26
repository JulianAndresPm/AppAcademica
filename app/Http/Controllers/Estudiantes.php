<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EstudiantesModel;


class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado',['estudiantes' => $estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }

    public function registrar(Request $r){
        $estudiantes = new EstudiantesModel();
        $estudiantes = new EstudiantesModel();
        $estudiantes->codestudiante = $r->input('codestudiante');
        $estudiantes->nomestudiante = $r->input('nomestudiante');
        $estudiantes->edaestudiante = $r->input('edaestudiante');
        $estudiantes->fechestudiante = $r->input('fechestudiante');
        $estudiantes->sexestudiante = $r->input('sexestudiante');
        $estudiantes->ciudad = $r->input('ciudad');
        $estudiantes->barrio = $r->input('barrio');
        $estudiantes->programa = $r->input('programa');
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiantes = EstudiantesModel::findOrfail($id);
        $estudiantes->delete();
        return redirect()->route('listadoEst');
    }

    public function form_editar($id){
        $estudiantes = EstudiantesModel::findOrfail($id);
        return view('estudiantes.form_editar',['estudiantes' => $estudiantes]);
    }

    public function editar(Request $e, $id){
        $estudiantes = new EstudiantesModel();
        $estudiantes->codestudiante = $e->input('codestudiante');
        $estudiantes->nomestudiante = $e->input('nomestudiante');
        $estudiantes->edaestudiante = $e->input('edaestudiante');
        $estudiantes->fechestudiante = $e->input('fechestudiante');
        $estudiantes->sexestudiante = $e->input('sexestudiante');
        $estudiantes->ciudad = $e->input('ciudad');
        $estudiantes->barrio = $e->input('barrio');
        $estudiantes->programa = $e->input('programa');
        $estudiantes ->save();
        return redirect()->route('listado');
    }

}
