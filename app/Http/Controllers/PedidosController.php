<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pedidos'] = Pedidos::paginate(10);
        return view('pedidos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pedidos.create');
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
            'Fecha_pedido' => 'required|date',
            'Estado_pedido' => 'required|string|max:50',
            'cliente_codigo' => 'required|string|max:50',
            'vendedor_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);

        $datos_Pedido = request()->except('_token');
        //nos inserta a la bd
        Pedidos::insert($datos_Pedido);


        return redirect('pedidos')->with('Mensaje', 'Pedido agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido = Pedidos::findOrFail($id);

        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'Fecha_pedido' => 'required|date',
            'Estado_pedido' => 'required|string|max:50',
            'cliente_codigo' => 'required|string|max:50',
            'vendedor_codigo' => 'required|string|max:50'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);


        $datos_Pedido = request()->except(['_token', '_method']);
        Pedidos::where('id', '=', $id)->update($datos_Pedido);

    
        return redirect('pedidos')->with('Mensaje', 'Pedido modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedidos::destroy($id);

        return redirect('pedidos')->with('Mensaje', 'Pedido eliminado de manera éxitosa!!!');
    }
}
