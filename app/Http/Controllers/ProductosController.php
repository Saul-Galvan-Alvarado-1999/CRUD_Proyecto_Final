<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos'] = Productos::paginate(10);
        return view('productos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
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
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Tipo' => 'required|string|max:50',
            'Producto_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Producto = request()->except('_token');
        //nos inserta a la bd
        Productos::insert($datos_Producto);


        return redirect('productos')->with('Mensaje', 'Producto agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Productos::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Tipo' => 'required|string|max:50',
            'Producto_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Producto = request()->except(['_token', '_method']);
        Productos::where('id', '=', $id)->update($datos_Producto);

        return redirect('producto')->with('Mensaje', 'Producto modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Productos::destroy($id);

        return redirect('productos')->with('Mensaje', 'Producto eliminado de manera éxitosa!!!');
    }
}
