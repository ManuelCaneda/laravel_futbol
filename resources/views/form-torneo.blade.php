<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir torneo</title>
</head>
<body>
    @if(isset($msg))
        <p style="color: green">{{$msg}}</p>
    @elseif(isset($error))
        <p style="color: red">{{$error}}</p>
    @endif
    <h1>Añadir torneo</h1>
    <form action="{{route('add-torneo')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="nacional">Nacional</label>
        <input type="checkbox" name="nacional" id="nacional"><br><br>

        <button type="submit">Añadir</button>
        <button type="reset">Limpiar</button>
    </form><br>
    <a href="/"><button>Volver</button></a>
</body>
</html>