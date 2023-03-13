<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioController extends Controller
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



    public function index($servicio)
    {
        //Lista de post Auth::user()->email
        $tour =  Servicio::find($servicio);
        return $tour;
        // metodo de compact('$nombre') = [ 'a' => $nombre]
        //return view('admin.pages.tours.ver', compact('tour'));
        // $fechahoy = date('Y-m-d g:i a'); //= 2021-11-21 2:23 pm
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return $request->$tour->precio;
        //Registro de un nuevo Servicio-Equipo

        $equipo =  Equipo::find($request->idcliente);
        //valor del imput seleccionado
        $totalcliente = 0;
        if (is_array($request['countries']))
        $selected = '';
        $num_countries = count($request['countries']);
        $current = 0;
        //cantidad de Servicios seleccionados para el equipo
        foreach ($request['countries'] as $key => $value) {
            if ($current != $num_countries - 1)
                $selected .= $value . ', ';
            else
                $selected .= $value . '.';
            $current++;
            $total = null;
            //Insertar datos en la tabla Servicio los datos del equipo-servicio
            $tour =  Tour::find($value);
            $servicio = new Servicio();
            $servicio->cliente_id = $equipo->id;
            $servicio->tipo = $tour->recorrido;
            $servicio->tour_id = $value;
            $servicio->check_in = $equipo->fecha_inicio;
            $servicio->check_out = $equipo->fecha_fin;
            $servicio->hora_inicio = $tour->hora_salida;
            $servicio->hora_fin = $tour->hora_retorno;
            // Obtiene el numero de dias entre el Check-in y check-out
            $servicio->dias = floor(abs((strtotime($servicio->check_in) - strtotime($servicio->check_out)) / 86400)) + 1;
            $servicio->recepcion = $tour->lugar_salida;
            $servicio->forma_venta = $equipo->venta;
            $servicio->personas = $equipo->personas;
            $servicio->adultos = $equipo->adultos;
            $servicio->ninios = $equipo->ninos;
            $servicio->pagos = "pendiente";
            $servicio->hospedaje = $equipo->salida;
            $servicio->direccion = $equipo->direccion;
            $servicio->vencimiento = $equipo->fecha;
            $servicio->precio = $tour->precio;
            $servicio->costo = $tour->costo;
            $servicio->anticipo = "0";
            $servicio->faltante = "0";
            $servicio->iva = "0";
            $total = $servicio->precio * $servicio->dias * $servicio->personas;
            $totalcliente = $totalcliente + $total;
            $servicio->total = $totalcliente;
            $servicio->descripcion = $tour->nombre;
            $servicio->atencion = Auth::user()->email;
            $servicio->save();
        }
        $equipo->forceFill(['faltante' => ($totalcliente)])->save();
        $equipo->forceFill(['total' => ($totalcliente)])->save();
        //return $equipo;
        return redirect()->route('admin.equipo.ver', $equipo);
        //return redirect()->route('admin.servicio.modificar', $equipo);
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
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tour = Tour::all();
        $equipo =  Equipo::find($id);
        $servicios = $equipo->servicio;
        //$servicios = Servicio::with('tour')->get();

        //Lista de post Auth::user()->email
        //$equipo = Equipo::find($servicio->cliente_id);
        return view('admin.pages.clientes.modificarCliente', compact('equipo', 'tour', 'servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //actualizacion de un servicio-equipo
        //return $request->all();

        $servicio->costo  = $request->costo;
        $servicio->precio  = $request->precio;
        $servicio->recepcion  = $request->lugar_salida;
        $servicio->recepcion = $request->lugar_fin;
        $servicio->tipo  = $request->recorrido;
        $servicio->check_in = $request->fecha_salida;
        $servicio->check_out = $request->fecha_retorno;
        $servicio->hora_inicio = $request->hora_salida;
        $servicio->hora_fin  = $request->hora_retorno;
        $servicio->descripcion = $request->descripcion;

        //return $servicio;
        $servicio->save();
        $equipo = $servicio->cliente_id;
        return redirect()->route('admin.servicio.modificar', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
        $equipo = $servicio->cliente_id;
        $servicio->delete();
        return redirect()->route('admin.servicio.modificar', $equipo);
    }
}
