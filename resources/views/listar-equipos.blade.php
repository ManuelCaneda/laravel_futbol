<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de equipos</title>
</head>
<body>
    <h1>Lista de equipos</h1>
    @if(count($equipos)==0)
    <h2>No hay equipos registrados</h2>
    @else
    <table>
        <tr>
            <th>Nombre</th>
            <th>Número de socios</th>
            <th>Acciones</th>
        </tr>
        @foreach($equipos as $e)
            <tr>
                <td>{{$e->nombre}}</td>
                <td>{{$e->num_socios}}</td>
                <td><a href="{{route('add-jugador-equipo',$e->id)}}">Añadir jugadores</a>, 
                    <a href="{{route('list-jugadores-equipo',$e->id)}}">Listar jugadores</a>
                </td>
            </tr>
        @endforeach
    </table>
    @endif
    <a href="/"><button>Volver</button></a>
</body>
</html>