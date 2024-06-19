@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Editar Persona</h1>
        <form action="{{ route('personas.update', $personas->Idpersona) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $personas->Nombre }}" required>
            </div>
            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="{{ $personas->Apellidos }}" required>
            </div>
            <div class="form-group">
                <label for="Dirección">Dirección</label>
                <input type="text" class="form-control" id="Dirección" name="Dirección" value="{{ $personas->Dirección }}" required>
            </div>
            <div class="form-group">
                <label for="Teléfono">Teléfono</label>
                <input type="text" class="form-control" id="Teléfono" name="Teléfono" value="{{ $personas->Teléfono }}">
            </div>
            <div class="form-group">
                <label for="Sexo">Sexo</label>
                <input type="text" class="form-control" id="Sexo" name="Sexo" value="{{ $personas->Sexo }}">
            </div>
            <div class="form-group">
                <label for="Fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_nacimiento" value="{{ $personas->Fecha_nacimiento }}">
            </div>
            <div class="form-group">
                <label for="Profesión">Profesión</label>
                <input type="text" class="form-control" id="Profesión" name="Profesión" value="{{ $personas->Profesión }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@stop
