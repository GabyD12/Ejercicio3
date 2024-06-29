<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Destino</h1>

    <form action="{{route('destino.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       

        <label>
           Nombre
            <br>
            <input type="text" name="nombre">
        </label>
       
        <br>
        <label>
         Otros
            <br>
            <input type="text" name="otros">
        </label>

        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>