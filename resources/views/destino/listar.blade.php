<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>

<h1>Listar Destino</h1>

<table>
    <thead>
        <tr>
            
            <th>nombre</th>
            <th>otros</th>
          
            
          
        </tr>
    </thead>
    <tbody>
        @foreach ($destino as $destino)
        <tr>
            <td>{{$destino->nombre}}</td>
            <td>{{$destino->otros}}</td>
            
            
          
            <td>
                <a href="{{route('destino.show',$destino->id)}}">Detalle</a>
                <a href="{{route('destino.edit',$destino->id)}}">Editar</a>
                <form action="{{route('destino.destroy',$destino->id)}}" method="POST">
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
