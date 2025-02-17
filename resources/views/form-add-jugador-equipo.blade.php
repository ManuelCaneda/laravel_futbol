<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir jugador</title>
</head>
<body>
    <h1>Añadir jugadores al {{$equipo->nombre}}</h1>
    @if(count($jugadores)==0)
        <h1 style="color:red">No hay jugadores registrados o sin equipo</h1>        
    @else
    <form action="{{route('add-jugador-equipo',$equipo->id)}}" method="post">
        @csrf        
        @foreach($jugadores as $j)
            @if(!$j->equipo)
                <input type="checkbox" name="id_jugadores[]" value="{{$j->id}}" >
                <label>{{$j->nombre}} {{$j->apellidos}}</label><br>
            @endif
        @endforeach
        <br>
        <button type="submit">Añadir</button>
        <button type="reset">Limpiar</button>
    </form><br>
    @endif
    <a href="/equipos/listar"><button>Volver</button></a>
</body>
</html>