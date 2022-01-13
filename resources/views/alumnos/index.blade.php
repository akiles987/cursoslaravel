@extends("layouts.app2")

@section("contenido")
<script>
    $(document).ready(function() {
        $(".borrar").click(function(){
                    const tr=$(this).closest("tr"); //guardamos el tr completo
                    const id=tr.data("id");
                    Swal.fire({
                        title: '¿Seguro que desea borrarlo?',
                        showCancelButton: true,
                        confirmButtonText: 'Borrar',
                        cancelButtonText: `Cancelar`,
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            $.ajax({
                                method: "POST",
                                url   : "{{url('/alumnos')}}/"+id,
                                data  : {
                                    _token: "{{csrf_token()}}",
                                    _method: "delete",
                                },
                                success: function(){
                                    tr.fadeOut();
                                }
                            });
                        } 
                    })
                });
            });
        </script>

</head>
<body>
    <h1>Alumnos</h1>

        <a href=" {{url('/imprimiralumno')}}" class="btn btn-primary">Descargar Tabla en PDF</a>
        <a href=" {{url('/alumnos/create')}}" class="btn btn-primary">Nuevo alumno</a>
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Clase</th>
                    <th>Curso</th>
                    <th>Dni</th>
                    <th>Borrar</th>
                    <th>Editar</th>
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
                        <td>{{$alumno->clase}}</td>
                        <td>{{$alumno->curso}}</td>
                        <td>{{$alumno->dni}}</td>
                        <td><a href="#" class='btn btn-danger borrar'><input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                        <td><a href="{{url('/alumnos')}}/{{$alumno->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>


                    </tr>
                @endforeach
            </tbody>

        </table>



@endsection