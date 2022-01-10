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
    <h3>Editar profesore </h3>
    <form action="{{url('/profesores/')}}/{{$profesore->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$profesore->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$profesore->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$profesore->apellidos}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$profesore->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">f_nacimiento</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$profesore->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{$profesore->telefono}}">
        </div>
        <div class="form-group">
            <label for="dni">dni</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$profesore->dni}}">
        </div>
        <div class="form-group">
            <label for="curso">curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="curso" value="{{$profesore->curso}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/profesores')}}" class="btn btn-secondary">Cancelar</a>
@endsection