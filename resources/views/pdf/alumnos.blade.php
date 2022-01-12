<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    table, td, th{
        border:1px solid black;
    }
    table {
        border-collapse:collapse;
        width:110%;
    }
    td, th {
        padding:0.1px;
    }
</style>
<table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>email</th>
                    <th>f_nacimiento</th>
                    <th>telefono</th>
                    <th>Clase</th>
                    <th>curso</th>
                    <th>dni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr data-id='{{$alumno->id}}'>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellidos}}</td>
                        <td>{{$alumno->email}}</td>
                        <td>{{$alumno->f_nacimiento}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->clase}}</td>
                        <td>{{$alumno->curso}}</td>
                        <td>{{$alumno->dni}}</td>
                    </tr>
                @endforeach
</body>
</html>
