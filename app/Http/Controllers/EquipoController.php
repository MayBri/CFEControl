<?php
namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $equipos = Equipo::orderBy('id', 'desc')->paginate();

        return view('admin.pages.equipos.listaEquipo', compact('equipos'))->with('lista', $equipos);
    }
    public function nuevoEquipo(){
         return view('admin/pages/equipos/nuevoEquipo');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return $request->all();
        $equipo = new Equipo();
        //$tour->email = Auth::user()->email;
        $equipo->nombre  = $request->nombre;
        $equipo->costo = $request->costo;
        $equipo->estado = $request->estado;
        $equipo->usuario = $request->usuario;
        $equipo->serie = $request->serie;
        $equipo->fecha_inicio = $request->fecha_inicio;
        $equipo->fecha_fin = $request->fecha_fin;
        $equipo->venta = $request->venta;
        $equipo->salida = $request->salida;
        $equipo->descripcion = $request->descripcion;
        //return $equipo;
        $equipo->save();
        return redirect()->route('admin.tour.catalogo', $equipo);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //actualizacion de un equipo
        //return $request->all();
        $equipo->nombre  = $request->nombre;
        $equipo->serie = $request->serie;
        $equipo->salida = $request->salida;
        $equipo->estado = $request->estado;
        $equipo->usuario = $request->usuario;
        $equipo->costo = $request->costo;
        $equipo->serie = $request->serie;
        $equipo->fecha_inicio = $request->fecha_inicio;
        $equipo->fecha_fin = $request->fecha_fin;
        $equipo->venta = $request->venta;
        $equipo->descripcion = $request->descripcion;

        $id = $equipo->id;
        $dias = floor(abs((strtotime($equipo->fecha_inicio) - strtotime($equipo->fecha_fin)) / 86400)) + 1;

        //$servicio = Servicio::find($equipo);
        $totales = Servicio::where('equipo_id', $id)->get();
        $totala = 0;
        foreach ($totales as $key) {
            $totala = $totala + $key->precio;
        }
        $nuevototal = $totala * $equipo->personas * $dias;
        $equipo->faltante = $nuevototal - $equipo->anticipo;
        $equipo->total = $nuevototal;
        //return $equipo;
        $equipo->save();
        return redirect()->route('admin.servicio.modificar', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        return $equipo;
        $equipo->delete();
        return redirect()->route('admin.listaEquipo');
    }

    //Muestra un equipo especifico
    public function ver($id)
    {
        $tour = Tour::all();
        $equipo =  Equipo::find($id);
        $servicios = $equipo->servicio;
        //return view('admin.pages.equipos.ver', compact('equipo'));
        return view('admin.pages.equipos.ver', compact('equipo', 'tour', 'servicios' ));
    }

}
