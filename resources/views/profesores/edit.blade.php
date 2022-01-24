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
    <h3>{{__('messages.editarprof')}}</h3>
    <form action="{{url('/profesores/')}}/{{$profesore->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">{{__('messages.id')}}</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="{{__('messages.id')}}" value="{{$profesore->id}}">
        </div>
        <div class="form-group">
            <label for="nombre">{{__('messages.nombre')}}</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{__('messages.nombre')}}" value="{{$profesore->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">{{__('messages.apellidos')}}</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="{{__('messages.apellidos')}}" value="{{$profesore->apellidos}}">
        </div>
        <div class="form-group">
            <label for="email">{{__('messages.email')}}</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="{{__('messages.email')}}" value="{{$profesore->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">{{__('messages.f_nacimiento')}}</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="{{__('messages.f_nacimiento')}}" value="{{$profesore->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="telefono">{{__('messages.telefono')}}</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="{{__('messages.telefono')}}" value="{{$profesore->telefono}}">
        </div>
        <div class="form-group">
            <label for="dni">{{__('messages.dni')}}</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="{{__('messages.dni')}}" value="{{$profesore->dni}}">
        </div>
        <div class="form-group">
            <label for="curso">{{__('messages.curso')}}</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="{{__('messages.curso')}}" value="{{$profesore->curso}}">
        </div>
        <button type="submit" class="btn btn-primary">{{__('messages.guardar')}}</button>
        <a href="{{url('/profesores')}}" class="btn btn-secondary">{{__('messages.volver')}}</a>
@endsection