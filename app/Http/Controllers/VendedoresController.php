<?php

namespace App\Http\Controllers;

use App\Models\Vendedores;
use Illuminate\Http\Request;


class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['vendedores'] = Vendedores::paginate(10);
        return view('vendedores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esto de abajo es para validar los campos
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_materno' => 'required|string|max:50',
            'vendedor_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        // $datos_Vendedor=request()->all();

        $datos_Vendedor = request()->except('_token');
        //nos inserta a la bd
        Vendedores::insert($datos_Vendedor);

        //return response()->json($datos_Vendedor);
        return redirect('vendedores')->with('Mensaje', 'Vendedor agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedores $vendedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vendedor = Vendedores::findOrFail($id);

        return view('vendedores.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        //Esto de abajo es para validar los campos
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_materno' => 'required|string|max:50',
            'vendedor_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Vendedor = request()->except(['_token', '_method']);
        Vendedores::where('id', '=', $id)->update($datos_Vendedor);

        //$vendedor= Vendedores::findOrFail($id);

        // return view('vendedores.edit', compact('vendedor'));
        return redirect('vendedores')->with('Mensaje', 'Vendedor modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vendedores::destroy($id);

        return redirect('vendedores')->with('Mensaje', 'Vendedor eliminado de manera éxitosa!!!');
    }
}
