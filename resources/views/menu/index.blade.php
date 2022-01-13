@extends("layouts.app")

@section("contenido")
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
            background-image: url("https://www.wallpapertip.com/wmimgs/24-247291_fondos-de-pantalla-4k.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>




</head>
<body>
    <h1><p class="text-center">Inicio</p></h1>
    <div class="text-center ">
    <div class="btn-group shadow-0" role="group" aria-label="Basic example">
  
  <a href=" {{url('/profesores')}}" class="btn btn-outline-secondary btn-lg">Listado de profesores</a>
  <a href=" {{url('/alumnos')}}" class="btn btn-outline-secondary btn-lg">Lista de alumnos</a>
  <a href=" {{url('/cursos')}}" class="btn btn-outline-secondary btn-lg">Lista de cursos</a>

</div>
    <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Descarga directa
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('/imprimir')}}">Descargar PDF Profesor</a>
    <a class="dropdown-item" href=" {{url('/imprimiralumno')}}">Descargar PDF Alumno</a>
  </div>
</div>
</div>
@endsection
