<h1>Actualizar Destino</h1>
<form action="{{route('destino.update', $destino)}}"  method="POST">

    @csrf
    @method('put')

   
    <label>
    Nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$destino->nombre) }}">
    <br>
    </label>
    
    <label>
    Otros
    <br>
    <input name="otros" type="text" value="{{old('otros',$destino->otros) }}">
    <br>
    </label>

       
        
    <br>
   
    <button  type="submit">Actualizar Destino</button>
   
</form>