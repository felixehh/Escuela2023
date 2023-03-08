<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumno</title>
</head>
<body>
    <h1>Eliminar Alumno</h1>
    <p>Esta seguro de eliminar a <strong>{{$alumno->nombre}}</strong></p>
    <form action="">
        @csrf 
        @method('delete')
        <button type="submit">Si</button>
        <a href="{{route('alumnos.index')}}">Cancelar</a>
    </form>
</body>
</html>