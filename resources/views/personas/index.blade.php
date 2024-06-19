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
                                        Acción
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('personas.show', $persona->Idpersona) }}">Ver</a>
                                        <a class="dropdown-item" href="{{ route('personas.edit', $persona->Idpersona) }}">Editar</a>
                                        <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#confirmDeleteModal" data-id="{{ $persona->Idpersona }}">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de confirmación de eliminación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar esta persona?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $('#confirmDeleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var action = '{{ route('personas.destroy', ':id') }}';
            action = action.replace(':id', id);
            $('#deleteForm').attr('action', action);
        });
    </script>
@stop
