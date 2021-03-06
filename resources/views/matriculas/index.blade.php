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
    <h1>Clientes</h1>



        <a href=" {{url('/')}}" class="btn btn-primary">←</a>
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>{{__('messages.id')}}</th>
                    <th>{{__('messages.curso')}}</th>
                    <th>{{__('messages.nombre')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                    <tr data-id='{{$curso->id}}'>
                        <td>{{$curso->id}}</td>
                        <td>{{$curso->curso}}</td>
                        <td>{{$curso->nombre}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>



@endsection