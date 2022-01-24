<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituto Secundaria Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <script>
    $(document).ready(function() {
       $('#tabla').DataTable({
        "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }});});
    </script>


    <style>
        body {
            background-color: #F7FAFC;
            background-image: url("https://external-preview.redd.it/GOkP8onbuyjGmN9Rc8Que5mw21CdSw6OuXpAKUuE6-4.jpg?auto=webp&s=2bc0e522d1f2fa887333286d557466b2be00fa5e");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
        }
        #principal {
            margin: 40px;
            padding: 40px;
            border: 1px solid #2ECC71;
            border-radius: 15px;
            background-color: #F388EC;
            box-shadow: 0 4px 6px -1px  rgba(0,0,0,0.23);
        }
        #menu {
            margin: 40px;
            padding: 10px;
            border: 4px solid lightskyblue;
            border-radius: 15px;
            background-color: white;
            background-image: url("https://i.giphy.com/media/fXFMtvW5L6bYI/giphy.gif");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        table {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            background-color: #92E8D7;
            
        }
    </style>
@livewireStyles

</head>
<body>
    <div id="menu">
        @include('layouts.menu')
    </div>
    <div id="principal">

        @yield('contenido')
    </div>
    @livewireScripts
</body>
</html>