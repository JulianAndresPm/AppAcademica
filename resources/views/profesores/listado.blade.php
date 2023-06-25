@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
@stop

@section('content')
    <h1>Listado Profesores</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Opciones</th>
                <th>
                    <a type="button" class="btn btn-success " href="/profesores/registro">+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($profesores  as $pf)
                <tr>
                    <td>{{$cont}}</td>
                    <td>{{$pf->codprofesor}}</td>
                    <td>{{$pf->nomprofesor}}</td>
                    <td>{{$pf->catprofesor}}</td>

                    <td>
                        <a type="button" class="btn btn-primary" href="{{route('editarProf_form',$pf -> codprofesor)}}" >Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('eliminarProf',$pf -> codprofesor)}}">Eliminar</a>
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
