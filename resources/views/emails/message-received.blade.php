<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p><strong> Recibiste un mensaje de: </strong> {{ $mensaje['name'] }}</p>
    <p><strong> Email: </strong> {{ $mensaje['email'] }}</p>
    <p><strong> Asunto: </strong> {{ $mensaje['subject'] }}</p>
    <p><strong> Contenido: </strong> {{ $mensaje['content'] }}</p>
        
</body>
</html>

{{-- {{var_dump($mensaje)}} --}}