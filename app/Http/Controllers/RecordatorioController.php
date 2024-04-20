<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recordatorio;
use App\Models\Persona;

class RecordatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recordatorio = Recordatorio::all();
        return view ("recordatorio.index2")->with("recordatorio",$recordatorio);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        return view("recordatorio.create")->with("id",$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $recordatorio = new Recordatorio();
        $recordatorio->fecha=$request->get("fecha");
        $recordatorio->descripcion=$request->get("descripcion");
        $recordatorio->save();
        $recordatorios = Recordatorio::all();
        return view("recordatorio.index2")->with("recordatorios",$recordatorios)->with("persona",$request->get("id"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $persona = Persona::find($id);
        $recordatorios = Recordatorio::All();
        return view("recordatorio.index")->with("recordatorios",$recordatorios)
                                         ->with("persona",$persona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
