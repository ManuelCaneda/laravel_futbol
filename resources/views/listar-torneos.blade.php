<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de equipos de un torneo</title>
</head>
<body>
    <h1>Lista de torneos</h1>
    @if(count($equipos)==0)
    <h2>No hay torneos disponibles.</h2>
    @else
    <form action="" method="post">
        <fieldset>
            <legend>Filtrar por torneo y año</legend>
            Torneo: 
            <select name="torneo" id="torneo">
                @foreach ($torneos as $t)
                    <option value="{{$t->id}}">{{$t->nombre}}</option>
                @endforeach
            </select>

            Año: 
            <input type="number" name="anho" id="anho" min="1900" max="2025">
            <button type="submit">Buscar</button>
        </fieldset>
    </form>
        @if(count($equipos)==0)
        <h2>No hay equipos en esa competición y/o año</h2>
        @else
        <table>
            <tr>
                <th>Nombre</th>
            </tr>
            @foreach($equipos as $e)
                <tr>
                    <td>{{$e->nombre}}</td>
                </tr>
            @endforeach
        </table>
        @endif
    @endif
    <a href="/"><button>Volver</button></a>
</body>
</html>