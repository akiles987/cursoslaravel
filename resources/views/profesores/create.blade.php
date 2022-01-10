@extends("layouts.app2")


@section("contenido")
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <h3>Insertar Profesor </h3>
    <form action="{{route('profesores.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <label for="direccion">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="ciudad">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="FechaNacimiento">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
        </div>
        <div class="form-group">
            <label for="telefono">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
        </div>
        <div class="form-group">
            <label for="telefono">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="curso">
        </div>
        

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/profesores')}}" class="btn btn-secondary">Volver</a>
    </form>

@endsection