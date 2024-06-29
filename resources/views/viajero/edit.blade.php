<h1>Actualizar Cliente</h1>
<form action="{{route('viajero.update', $viajero)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    DNI
    <br>
    <input name="DNI" type="text" value="{{old('DNI',$viajero->DNI) }}">
    <br>
    </label>
   
    <label>
    Nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$viajero->nombre) }}">
    <br>
    </label>
    
    <label>
    Telefono
    <br>
    <input name="telefono" type="text" value="{{old('telefono',$viajero->telefono) }}">
    <br>
    </label>
   
    <br>
    <label>
    Direccion
    <br>
    <input name="direccion" type="text" value="{{old('direccion',$viajero->direccion)}}">
    <br>
    </label>
       
        
    <br>
   
    <button  type="submit">Actualizar Viajero</button>
   
</form>