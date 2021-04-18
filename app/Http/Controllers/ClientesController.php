<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes'] = Clientes::paginate(10);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Esto de abajo es para validar los campos
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_materno' => 'required|string|max:50',
            'cliente_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Cliente = request()->except('_token');
        //nos inserta a la bd
        Clientes::insert($datos_Cliente);


        return redirect('clientes')->with('Mensaje', 'Cliente agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Clientes::findOrFail($id);

        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_materno' => 'required|string|max:50',
            'cliente_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Cliente = request()->except(['_token', '_method']);
        Clientes::where('id', '=', $id)->update($datos_Cliente);

        return redirect('clientes')->with('Mensaje', 'Cliente modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Clientes::destroy($id);

        return redirect('clientes')->with('Mensaje', 'Cliente eliminado de manera éxitosa!!!');
    }
}
