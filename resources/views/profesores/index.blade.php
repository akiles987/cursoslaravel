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
                                url   : "{{url('/profesores')}}/"+id,
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
    <h1>{{__('messages.profesores')}}</h1>

    <a href=" {{url('/imprimir')}}" class="btn btn-primary">{{__('messages.descargaprof')}}</a>
    <a href=" {{url('/profesores/create')}}" class="btn btn-primary">{{__('messages.nuevoprof')}}</a>
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
                    <th>{{__('messages.borrar')}}</th>
                    <th>{{__('messages.editar')}}</th>
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
                        <td class="text-center"><a href="#" class='btn btn-danger borrar'><input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                        <td class="text-center"><a href="{{url('/profesores')}}/{{$profesore->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>



@endsection