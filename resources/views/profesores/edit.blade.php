@extends("layouts.app2")


@section("contenido")
    <h3>Editar profesore </h3>
    <form action="{{url('/profesores/')}}/{{$profesore->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" value="{{$profesore->codigo}}">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="{{$profesore->empresa}}">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Contacto" value="{{$profesore->contacto}}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{$profesore->direccion}}">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" value="{{$profesore->ciudad}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{$profesore->telefono}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/clientes')}}" class="btn btn-secondary">Cancelar</a>
@endsection