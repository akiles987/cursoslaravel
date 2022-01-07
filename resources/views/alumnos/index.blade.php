@extends("layouts.app2")

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
    <h1>Alumnos</h1>



        <a href=" {{url('/')}}" class="btn btn-primary">←</a>
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>email</th>
                    <th>f_nacimiento</th>
                    <th>telefono</th>
                    <th>curso</th>
                    <th>dni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr data-id='{{$alumno->id}}'>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellidos}}</td>
                        <td>{{$alumno->email}}</td>
                        <td>{{$alumno->f_nacimiento}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->curso}}</td>
                        <td>{{$alumno->dni}}</td>


                    </tr>
                @endforeach
            </tbody>

        </table>



@endsection