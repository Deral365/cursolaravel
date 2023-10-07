<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido al curso laravel 10</h1>
    <h2>{{ $nombre }}</h2>
    <h2>Lista de asistencias 07/10/2023</h2>
    <ul>
       @foreach($alumnos as  $a)
       <li>{{ $a }}</li>
       @endforeach
    </ul>
    
    <h2>
        Datos
    </h2>

     <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Turno</th>
        </tr>
        @foreach ($datos as $d)
            <tr>
                <td>{{ $d ["nombre"] }}</td>
                <td>{{ $d ["edad"] }}</td>
                <td>{{ $d ["turno"] }}</td>
            </tr>
        @endforeach
     </table>
    <p>Laravel utiliza una arquitectura MVC modelo vista cotrolador</p>
    <p>
        Modelo: Es la base de datos, los modelos son nuestras tablas,por cada tabla debemos tener un modelo.
        Los modelos estan en la carpeta app/Models
    
    </p>
    <p>
        Vistas: Las vistas son las HTML y CSS que se muestran en la pagina web
        Estan en la carpetade resources/views
    </p>
    <p>
        Controladores: Son archivos donde se plasma la  logica del negocio
        Estan en app/http/Controllers
    </p>
    <p>
      Las rutas:  
    </p>
</body>
</html>