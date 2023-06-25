@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar facultad</h1>

@stop

@section('content')
<form action="{{route('editarFacultad',$facultades->codfacultad)}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="codfacultad" name="codfacultad" placeholder="##" value='{{$facultades->codfacultad}}'>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Facultad</label>
        <input type="text" class="form-control" id="nomfacultad" name="nomfacultad" value='{{$facultades->nomfacultad}}'>
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
