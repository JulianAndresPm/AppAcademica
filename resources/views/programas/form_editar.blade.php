@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Programa</h1>

@stop

@section('content')
<form action="{{route('editarPrograma',$programas->codprograma)}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="codprograma" name="codprograma" placeholder="##" value='{{$programas->codprograma}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Programa</label>
        <input type="text" class="form-control" id="nomprograma" name="nomprograma" value='{{$programas->nomprograma}}'>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Facultad</label>
        <input type="text" class="form-control" id="facultad" name="facultad" value='{{$programas->facultad}}'>
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
