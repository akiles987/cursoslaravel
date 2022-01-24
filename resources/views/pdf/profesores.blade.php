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
        width:100%;
    }
    td, th {
        padding:0.5px;
    }
</style>
<table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>{{__('messages.id')}}</th>
                    <th>{{__('messages.nombre')}}</th>
                    <th>{{__('messages.apellidos')}}</th>
                    <th>{{__('messages.email')}}</th>
                    <th>{{__('messages.f_nacimiento')}}</th>
                    <th>{{__('messages.telefono')}}</th>
                    <th>{{__('messages.dni')}}</th>
                    <th>{{__('messages.curso')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profesores as $profesore)
                    <tr data-id='{{$profesore->id}}'>
                        <td>{{$profesore->id}}</td>
                        <td>{{$profesore->nombre}}</td>
                        <td>{{$profesore->apellidos}}</td>
                        <td>{{$profesore->email}}</td>
                        <td>{{$profesore->f_nacimiento}}</td>
                        <td>{{$profesore->telefono}}</td>
                        <td>{{$profesore->dni}}</td>
                        <td>{{$profesore->curso}}</td>
                    </tr>
                @endforeach
</body>
</html>
