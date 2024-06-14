@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Lista de Personas</h1>
        <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear Persona</a>
        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Sexo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Profesión</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->Idpersona }}</td>
                            <td>{{ $persona->Nombre }}</td>
                            <td>{{ $persona->Apellidos }}</td>
                            <td>{{ $persona->Dirección }}</td>
                            <td>{{ $persona->Teléfono }}</td>
                            <td>{{ $persona->Sexo }}</td>
                            <td>{{ $persona->Fecha_nacimiento }}</td>
                            <td>{{ $persona->Profesión }}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('personas.show', $persona->Idpersona) }}">Ver</a>
                                        <a class="dropdown-item" href="{{ route('personas.edit', $persona->Idpersona) }}">Editar</a>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop