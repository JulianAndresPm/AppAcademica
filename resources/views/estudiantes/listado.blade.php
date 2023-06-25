@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <h1>Listado Estudiantes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Fecha Nac</th>
                <th scope="col">Sexo</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Barrio</th>
                <th scope="col">Programa</th>
                <th scope="col">Opciones</th>
                <th>
                    <a type="button" class="btn btn-success " href="/estudiantes/registro">+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($estudiantes  as $e)
                <tr>
                    <td>{{$cont}}</td>
                    <td>{{$e->codestudiante}}</td>
                    <td>{{$e->nomestudiante}}</td>
                    <td>{{$e->edaestudiante}}</td>
                    <td>{{$e->fechestudiante}}</td>
                    <td>{{$e->sexestudiante}}</td>
                    <td>{{$e->ciudad}}</td>
                    <td>{{$e->barrio}}</td>
                    <td>{{$e->programa}}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="{{route('editarEst_form',$e -> codestudiante)}}" >Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('eliminarEst',$e -> codestudiante)}}">Eliminar</a>
                    </td>
                </tr>
                @php
                    $cont = $cont + 1
                @endphp
            @endforeach
        </tbody>
    </table>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
