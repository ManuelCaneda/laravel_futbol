<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir equipo a un torneo</h1>
    @if(count($torneos)==0 || count($equipos)==0)
        <h2 style="color:red">No hay torneos o equipos registrados</h2>
    @else
    <form action="{{route('add-eq-torneo')}}" method="post">
        @csrf
        <label for="equipo">Selecciona el equipo:</label>
        <select name="equipo" id="equipo">
            @foreach ($equipos as $e)
                <option value="{{$e->id}}">{{$e->nombre}}</option>
            @endforeach
        </select><br><br>

        <label for="torneo">Selecciona el torneo</label>
        <select name="torneo" id="torneo">
            @foreach ($torneos as $t)
                <option value="{{$t->id}}">{{$t->nombre}}</option>
            @endforeach
        </select><br><br>

        <label for="anho">Año:</label>
        <input type="number" min="1900" max="2025" step="1" value="2025" name="anho" id="anho" /><br><br>
        
        <button type="submit">Añadir equipo</button>
    </form><br><br>
    @endif
    <a href="/"><button>Volver</button></a>
</body>
</html>