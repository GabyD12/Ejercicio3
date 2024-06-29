<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    //
    public function index(){
        $destino = Destino::orderBy('id', 'desc')->get();
        return view('destino.listar', ['destino' => $destino]);
    }
    public function edit(Destino $destino){
        return view('destino.edit', compact('destino'));
    }
    public function update(Request $request, Destino $destino){
        $destino->nombre=$request->nombre;
        $destino->otros=$request->otros;
       
        $destino->save();
     
        return redirect()->route('destino.index');
     
      }    

      public function destroy (Destino $destino){
           
        $destino->delete();
        return redirect()->route('destino.index');
    }

    public function show(Destino $destino){


        return view('destino.show',compact('destino'));




    }
     public function create(){
        return view('destino.create');
    }


    public function store(Request $request){
       
        $destino= new Destino();
        $destino->nombre=$request->nombre;
        $destino->otros=$request->otros;
       ;
        
        
        $destino->save();
   


    }
}
