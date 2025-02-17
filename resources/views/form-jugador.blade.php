<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir jugador</title>
</head>
<body>
    @if(isset($msg))
        <p style="color: green">{{$msg}}</p>
    @elseif(isset($error))
        <p style="color: red">{{$error}}</p>
    @endif

    <h1>Añadir jugador</h1>
    <form action="{{route('add-jugador')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="aps">Apellidos</label><br>
        <input type="text" name="aps" id="aps"><br><br>

        <label for="dorsal">Dorsal</label><br>
        <input type="number" name="dorsal" id="dorsal"><br><br>

        <label for="fecha-nac">Fecha de nacimiento</label><br>
        <input type="date" name="fecha-nac" id="fecha-nac"><br><br>

        <button type="submit">Añadir</button>
        <button type="reset">Limpiar</button>
    </form><br>
    <a href="/"><button>Volver</button></a>
</body>
</html>