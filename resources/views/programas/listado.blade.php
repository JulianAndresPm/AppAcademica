@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <h1>Listado Programas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Facultad</th>
                <th scope="col">Opciones</th>
                <th>
                    <a type="button" class="btn btn-success " href="/programas/registro">+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($programas  as $p)
                <tr>
                    <td>{{$cont}}</td>
                    <td>{{$p->codprograma}}</td>
                    <td>{{$p->nomprograma}}</td>
                    <td>{{$p->facultad}}</td>
                    <td>
                        <a type="button" class="btn btn-primary"  href="{{route('editarPro_form',$p -> codprograma)}}" >Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('eliminarPro',$p -> codprograma)}}">Eliminar</a>
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
