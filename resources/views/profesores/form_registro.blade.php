@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Registrar Profesores</h1>

@stop

@section('content')
<form action="{{url('/profesores/registro')}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="codprofesor" name="codprofesor" placeholder="##">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nomprofesor" name="nomprofesor">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="catprofesor" name="catprofesor">
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
