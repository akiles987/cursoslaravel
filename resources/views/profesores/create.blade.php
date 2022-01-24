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


    <h3>{{__('messages.nuevoprof')}}</h3>
    <form action="{{route('profesores.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">{{__('messages.nombre')}}</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{__('messages.nombre')}}">
        </div>
        <div class="form-group">
            <label for="apellidos">{{__('messages.apellidos')}}</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="{{__('messages.apellidos')}}">
        </div>
        <div class="form-group">
            <label for="direccion">{{__('messages.email')}}</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="{{__('messages.email')}}">
        </div>
        <div class="form-group">
            <label for="ciudad">{{__('messages.f_nacimiento')}}</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="{{__('messages.f_nacimiento')}}">
        </div>
        <div class="form-group">
            <label for="telefono">{{__('messages.telefono')}}</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="{{__('messages.telefono')}}">
        </div>
        <div class="form-group">
            <label for="telefono">{{__('messages.dni')}}</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="{{__('messages.dni')}}">
        </div>
        <div class="form-group">
        <label for="curso">{{__('messages.curso')}}: </label>
            <select name="curso" id="curso">
            <option value="ESO">{{__('messages.curso')}}</option>
            <option value="Bachillerato">Bachillerato</option>
            <option value="FP Grado Medio">Grado Medio</option>
            <option value="FP Grado Superior">Grado Superior</option>
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">{{__('messages.guardar')}}</button>
        <a href="{{url('/profesores')}}" class="btn btn-secondary">{{__('messages.volver')}}</a>
    </form>

@endsection