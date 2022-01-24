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
    <h3>{{__('messages.editaralum')}}</h3>
    <form action="{{url('/alumnos/')}}/{{$alumno->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">{{__('messages.id')}}</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="{{__('messages.id')}}" value="{{$alumno->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">{{__('messages.nombre')}}</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{__('messages.nombre')}}" value="{{$alumno->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">{{__('messages.apellidos')}}</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="{{__('messages.apellidos')}}" value="{{$alumno->apellidos}}">
        </div>
        <div class="form-group">
            <label for="email">{{__('messages.email')}}</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="{{__('messages.email')}}" value="{{$alumno->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">{{__('messages.f_nacimiento')}}</label>
            <h1 type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="{{__('messages.f_nacimiento')}}" >{{$alumno->f_nacimiento}}</h1>
        </div>
        <div class="form-group">
            <label for="telefono">{{__('messages.telefono')}}</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="{{__('messages.telefono')}}" value="{{$alumno->telefono}}">
        </div>
        <div class="form-group">
            <label for="dni">{{__('messages.dni')}}</label>
            <h1 type="text" class="form-control" id="dni" name="dni" placeholder="{{__('messages.dni')}}" >{{$alumno->dni}}</h1>
        </div>
        <div class="form-group">
        <label for="curso">{{__('messages.curso')}}: </label>
            <select name="curso" id="curso">
            <option value="ESO">ESO</option>
            <option value="Bachillerato">Bachillerato</option>
            <option value="FP Grado Medio">Grado Medio</option>
            <option value="FP Grado Superior">Grado Superior</option>
            </select>
        </div>
        <div class="form-group">
        <label for="clase">{{__('messages.clase')}}: </label>
            <select name="clase" id="clase">
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{__('messages.guardar')}}</button>
        <a href="{{url('/alumnos')}}" class="btn btn-secondary">{{__('messages.volver')}}</a>
@endsection