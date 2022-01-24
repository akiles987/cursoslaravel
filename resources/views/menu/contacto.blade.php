@extends("layouts.app2")

@section("contenido")

<body>

<h1>Contacto</h1>

<form action="{{'contacto'}}" method="POST">

    @csrf

    <label>
    {{__('messages.nombre')}}:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>

    @error('nombre')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
    {{__('messages.apellidos')}}:
        <br>
        <input type="text" name="apellido">
    </label>
    <br>
    @error('apellido')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label>
    {{__('messages.email')}}:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label>
    {{__('messages.mensaje')}}:
        <br>
        <textarea name="mensaje" cols="30" rows="6"></textarea>
    </label>
    <br>
    <button type="submit" class="btn btn-primary">{{__('messages.enviar')}}</button>

</form>

    @if (session('info'))
            <script>alert("{{session('info')}}")</script>
    @endif

</body>

@endsection