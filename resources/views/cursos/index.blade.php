<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/materialize.css')}}">
    <title>cursos</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>PROGRAMA</th>
            <th>ABREVIATURA</th>
            <th>CREADO POR</th>
            <th>ACTUALIZADO POR</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <TBody>
        @foreach ($formation as $rows)
        <tr>
        <td>{{$rows->id}}</td>
        <td>{{$rows->name}}</td>
        <td>{{$rows->abbreviation}}</td>
        <td>{{$rows->creeated_at}}</td>
        <td>{{$rows->updated_at}}</td>
        <td>
            <form action="" method="post">
                <a class="btn" href="{{ route('curso.edit') }}">EDITAR</a>
                <button class="btn" type="submit">ELIMINAR</button>
            </form>
        </td>
        </tr>
        @endforeach


    </TBody>
</table>
<a class="btn" href="{{ route('cursos.create') }} ">CREAR CURSO</a>
</body>
</html>
