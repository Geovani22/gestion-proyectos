@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Crear Persona</h1>
        <form action="{{ route('personas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" class="form-control" id="Apellidos" name="Apellidos" required>
            </div>
            <div class="form-group">
                <label for="Dirección">Dirección</label>
                <input type="text" class="form-control" id="Dirección" name="Dirección" required>
            </div>
            <div class="form-group">
                <label for="Teléfono">Teléfono</label>
                <input type="text" class="form-control" id="Teléfono" name="Teléfono" required>
            </div>
            <div class="form-group">
                <label for="Sexo">Sexo</label>
                <select class="form-control" name="Sexo" id="Sexo" required>
                    <option value="" disabled selected>Seleccione...</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="Fecha_nacimiento" name="Fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="Profesión">Profesión</label>
                <input type="text" class="form-control" id="Profesión" name="Profesión" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@stop
