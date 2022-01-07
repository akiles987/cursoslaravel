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
    <h1>Profesores</h1>



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
                    <th>dni</th>
                    <th>curso</th>
                    <th></th>
                    <th></th>
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
         {{--              <td><a class="btn_borrar" href="#"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
--}}
                        <td><form method="POST" action="{{url('/profesores')}}/{{$profesore->id}}">
                                @csrf
                                @method("delete")
                                <input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png">
                        </form>



                        <td><a href="{{url('/profesores')}}/{{$profesore->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>



@endsection