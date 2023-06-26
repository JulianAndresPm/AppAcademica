@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Estudiantes</h1>

@stop

@section('content')
<form action="{{route('editarEstudiantes',$estudiantes->codestudiante)}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="codestudiante" name="codestudiante" placeholder="##" value='{{$estudiantes->codestudiante}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nomestudiante" name="nomestudiante" placeholder="##" value='{{$estudiantes->nomestudiante}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Edad</label>
        <input type="text" class="form-control" id="edaestudiante" name="edaestudiante" placeholder="##" value='{{$estudiantes->edaestudiante}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha Nac</label>
        <input type="date" class="form-control" id="fechestudiante" name="fechestudiante" placeholder="" value='{{$estudiantes->fechestudiante}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sexo</label>
        <input type="text" class="form-control" id="sexestudiante" name="sexestudiante" placeholder="##" value='{{$estudiantes->sexestudiante}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="##" value='{{$estudiantes->ciudad}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Barrio</label>
        <input type="text" class="form-control" id="barrio" name="barrio" placeholder="##" value='{{$estudiantes->barrio}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Programa</label>
        <input type="text" class="form-control" id="programa" name="programa" placeholder="##" value='{{$estudiantes->programa}}'>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
