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
    <h3>Editar alumno </h3>
    <form action="{{url('/alumnos/')}}/{{$alumno->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$alumno->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$alumno->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$alumno->apellidos}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$alumno->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de Nacimiento</label>
            <h1 type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" >{{$alumno->f_nacimiento}}</h1>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{$alumno->telefono}}">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <h1 type="text" class="form-control" id="dni" name="dni" placeholder="DNI">{{$alumno->dni}}</h1>
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso" value="{{$alumno->curso}}">
        </div>
        <div class="form-group">
            <label for="clase">Clase</label>
            <input type="text" class="form-control" id="clase" name="clase" placeholder="Clase" value="{{$alumno->clase}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/alumnos')}}" class="btn btn-secondary">Cancelar</a>
@endsection