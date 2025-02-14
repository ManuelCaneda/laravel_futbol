<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de torneos</title>
</head>
<body>
    <h1>Lista de torneos</h1>
    @if(count($torneos)==0)
    <h2>No hay torneos disponibles.</h2>
    @else
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nacional</th>
        </tr>
        @foreach($torneos as $t)
            <tr>
                <td>{{$t->nombre}}</td>
                <td>
                    @if ($t->nacional==0)
                        No
                    @else
                        Sí
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    @endif
    <a href="/"><button>Volver</button></a>
</body>
</html>