@extends('layouts.app')

@section('titulo', 'Lista de usuarios')

@section('contenido')
    <h1>Mostrando todos los usuarios {{ Form::a_button('Nuevo usuario', route('usuarios.create'), 'success', 'pull-right') }}</h1>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>RUT</th>
            <th>NOMBRE</th>
            <th>SEXO</th>
            <th>F. NACIMIENTO</th>
            <th>FONO</th>
            <th>FONO CONTACTO</th>
            <th>EMAIL</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ formatear_rut($usuario->rut) }}</td>
                <td>{{ formatear_nombre($usuario, false, false) }}</td>
                <td>{{ formatear_sexo($usuario->sexo) }}</td>
                <td>{{ formatear_fecha($usuario->fecha_de_nacimiento) }}</td>
                <td>{{ formatear_telefono($usuario->telefono) }}</td>
                <td>{{ formatear_telefono($usuario->telefono_contacto) }}</td>
                <td>{{ $usuario->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection()