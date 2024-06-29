<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Viajero</h1>

    <form action="{{route('viajero.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
          DNI
            <br>
            <input type="text" name="DNI">
        </label>
        <br>
        <label>
           Nombre
            <br>
            <input type="text" name="nombre">
        </label>
       
        <br>
        <label>
         Telefono
            <br>
            <input type="text" name="telefono">
        </label>

        <br>
        <label>
            Direccion
               <br>
               <input type="text" name="direccion">
           </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>