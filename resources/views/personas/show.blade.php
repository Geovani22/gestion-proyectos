@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Detalles de la Persona</h1>
        <div class="card mt-4">
            <div class="card-header">
                <h3>{{ $personas->Nombre }} {{ $personas->Apellidos }}</h3>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $personas->Idpersona }}</p>
                <p><strong>Nombre:</strong> {{ $personas->Nombre }}</p>
                <p><strong>Apellidos:</strong> {{ $personas->Apellidos }}</p>
                <p><strong>Dirección:</strong> {{ $personas->Dirección }}</p>
                <p><strong>Teléfono:</strong> {{ $personas->Teléfono }}</p>
                <p><strong>Sexo:</strong> {{ $personas->Sexo }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $personas->Fecha_nacimiento }}</p>
                <p><strong>Profesión:</strong> {{ $personas->Profesión }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver a la lista</a>
            </div>
        </div>
    </div>
@stop
