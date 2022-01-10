@extends("layouts.app2")

@section("contenido")

<body>

<h1>Contacto</h1>

<form action="{{'contacto'}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>

    @error('nombre')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        Apellido:
        <br>
        <input type="text" name="apellido">
    </label>
    <br>
    @error('apellido')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" cols="30" rows="6"></textarea>
    </label>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

    @if (session('info'))
            <script>alert("{{session('info')}}")</script>
    @endif

</body>

@endsection