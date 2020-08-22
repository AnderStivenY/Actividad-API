<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/materialize.css')}}">
    <title>Crear Curso</title>
</head>
<body>

    <div class="row">
        <form action="{{ route('cursos.store') }}" method="post" class="col s12" id="data">
            @csrf
          <div class="row">
            <div class="input-field col s9">
              <input name="name" type="text" class="validate">
              <label for="name">NOMBRE DE PROGRAMA</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input name="abbreviation" type="text" class="validate">
              <label for="name">ABREVIACION</label>
            </div>
          </div>
        </form>
        <button class="btn" form="data" type="submit">ENVIAR</button>
        <a class="btn" href="{{ route('cursos.index') }}">CANCELAR</a>
      </div>
      <script src="{{ url('js/materialize.js') }}"></script>
</body>
</html>



