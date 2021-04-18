<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['detalles'] = Detalles::paginate(10);
        return view('detalles.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detalles.create');
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
            'Pedido_codigo' => 'required|string|max:50',
            'Producto_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Detalle = request()->except('_token');
        //nos inserta a la bd
        Detalles::insert($datos_Detalle);


        return redirect('detalles')->with('Mensaje', 'Detalle agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $detalle = Detalles::findOrFail($id);

        return view('detalles.edit', compact('detalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'Pedido_codigo' => 'required|string|max:50',
            'Producto_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Detalle = request()->except(['_token', '_method']);
        Detalles::where('id', '=', $id)->update($datos_Detalle);

        return redirect('detalles')->with('Mensaje', 'Detalle modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Detalles::destroy($id);

        return redirect('detalles')->with('Mensaje', 'Detalle eliminado de manera éxitosa!!!');
    }
}
