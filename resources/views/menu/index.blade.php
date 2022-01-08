@extends("layouts.app")

@section("contenido")
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
        }
    </style>




</head>
<body>
    <h1>Inicio</h1>

        <a href=" {{url('/profesores')}}" class="btn btn-info">Listado de profesores</a>
        <a href=" {{url('/cursos')}}" class="btn btn-info">Lista de cursos</a>
        <a href=" {{url('/alumnos')}}" class="btn btn-info">Lista de alumnos</a>
@endsection