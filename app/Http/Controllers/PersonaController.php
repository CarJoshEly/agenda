<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view ("persona.index")->with("personas",$personas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("persona.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $persona = new Persona();
        $persona->nombre = $request->get("nombre");
        $persona->apellido = $request->get("apellido");
        $persona->direccion = $request->get("direccion");
        $persona->telefono = $request->get("telefono");
        $persona->correo = $request->get("correo");
        $persona->nota = $request->get("nota");
        $persona->save();
        return redirect("/persona");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $personas = Persona::All();
        return view("persona.index2")->with("personas",$personas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarContacto = Persona::find($id);
        return view ("persona.edit")->with("editarContacto",$editarContacto);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarContacto=Persona::find($id);
        $editarContacto ->Nombre=$request->get("nombre");
        $editarContacto ->Apellido=$request->get("apellido");
        $editarContacto ->Direccion=$request->get("direccion");
        $editarContacto ->Telefono=$request->get("telefono");
        $editarContacto ->Correo=$request->get("correo");
        $editarContacto ->Nota=$request->get("nota");
        $editarContacto->save();
        return redirect("persona");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarContacto=Persona::find($id);
        $eliminarContacto->delete();
        return redirect("persona");
    }
}
