<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    //
    public function index(){
        $viajero = Viajero::orderBy('id', 'desc')->get();
        return view('viajero.listar', ['viajero' => $viajero]);
    }
    public function edit(Viajero $viajero){
        return view('viajero.edit', compact('viajero'));
    }
    public function update(Request $request, Viajero $viajero){
        $viajero->DNI=$request->DNI;
        $viajero->nombre=$request->nombre;
        $viajero->telefono=$request->telefono;
        $viajero->direccion=$request->direccion;
        
        $viajero->save();
     
        return redirect()->route('viajero.index');
     
      }    

      public function destroy (Viajero $viajero){
           
        $viajero->delete();
        return redirect()->route('viajero.index');
    }

    public function show(Viajero $viajero){


        return view('viajero.show',compact('viajero'));




    }
     public function create(){
        return view('viajero.create');
    }


    public function store(Request $request){
       
        $viajero= new Viajero();
        $viajero->DNI=$request->DNI;
        $viajero->nombre=$request->nombre;
        $viajero->telefono=$request->telefono;
        $viajero->direccion=$request->direccion;
        $viajero->save();
   


    }
}
