<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Viajero</h1>

<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>direccion</th>
            
          
        </tr>
    </thead>
    <tbody>
        @foreach ($viajero as $viajero)
        <tr>
            <td>{{$viajero->DNI}}</td>
            <td>{{$viajero->nombre}}</td>
            <td>{{$viajero->telefono}}</td>
            <td>{{$viajero->direccion}}</td>
            
          
            <td>
                <a href="{{route('viajero.show',$viajero->id)}}">Detalle</a>
                <a href="{{route('viajero.edit',$viajero->id)}}">Editar</a>
                <form action="{{route('viajero.destroy',$viajero->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
   
</body>
</html>
