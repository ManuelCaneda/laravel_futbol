<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de torneos</title>
</head>
<body><h1>Lista de jugadores</h1>
    @if(count($jugadores)==0)
    <h2>No hay jugadores registrados</h2>
    @else
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dorsal</th>
            <th>Fecha de nacimiento</th>
        </tr>
        @foreach($jugadores as $j)
            <tr>
                <td>{{$j->nombre}}</td>
                <td>{{$j->apellidos}}</td>
                <td>{{$j->dorsal}}</td>
                <td>{{$j->f_nac}}</td>
            </tr>
        @endforeach
    </table>
    @endif
    <a href="/"><button>Volver</button></a>
</body>
</html>