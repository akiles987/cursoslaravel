<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de contacto</h1>

    <p>Estos son los datos de contacto del usuario interesado:</p>

    <p><strong>Nombre y apellidos</strong> {{$contacto['nombre']}}  {{$contacto['apellido']}}</p>
    <p><strong>Correo</strong> {{$contacto['correo']}}</p>
    <p><strong>Mensaje</strong> {{$contacto['mensaje']}}</p>

</body>
</html>