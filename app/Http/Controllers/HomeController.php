<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Throwable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['allTours', 'pagos', 'create', 'createweb','ver', 'masTours', 'salida']]);
    }
    public function allTours()
    {
        $request = true;
        //if ($request->user() != null) {
        if ($request != null) {
            //$files = Tour::orderBy('created_at', 'asc')->paginate(12);
            $tour = Tour::orderBy('created_at', 'desc')->get();
            return json_decode($tour);
        }
        //return "[Sin acceso]";
    }


    public function masTours()
    {
            //Busqueda aleatorio de 3 tours
            $tour = Tour::inRandomOrder()->take(3)->get();
            return $tour;
    }

    public function salida($salida)
    {
        if ($salida == "todo") {
            $tour = Tour::orderBy('created_at', 'desc')->get();
            return json_decode($tour);
        }
        $tour = Tour::where('lugar_salida', $salida)->orderBy('id', 'desc')->get();
            return json_decode($tour);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Lista de los equipos
        $equipos = Equipo::all();
        return view('admin.index')->with('lista', $equipos);
        //return view('admin/index');
        //return "<h1>Index de HomeController</h1>";
    }


    public function pagos($id)
    {
        $equipo =  Equipo::find($id);
        return $equipo;
        //return view('admin.pagos.pagoServicio', compact('equipo'));
    }

    public function create(Request $request)
    {
        return $request;
        try {
        //return $request->all();
        $equipo = new Equipo();
        //$tour->email = Auth::user()->email;
        $equipo->nombre  = $request->nombre;
        $equipo->serie = $request->serie;
        $equipo->salida = $request->salida;
        $equipo->estado = $request->estado;
        $equipo->usuario = $request->usuario;
        $equipo->costo = $request->costo;
        $equipo->serie = $request->serie;
        $equipo->fecha_inicio = $request->fecha_inicio;
        $equipo->venta = $request->link;
        $equipo->descripcion = $request->descripcion;
        $idtour = $request->idtour;
        $equipo->anticipo = "0";
        $equipo->save();

        $totalcliente = 0;
        $total = null;
            //Insertar datos en la tabla Servicio los datos del equipo-servicio
            $tour =  Tour::find($idtour);
            $servicio = new Servicio();
            $servicio->cliente_id = $equipo->id;
            $servicio->tipo = $tour->recorrido;
            $servicio->tour_id = $request->idtour;
            $servicio->check_in = $equipo->fecha_inicio;
            $servicio->check_out = $equipo->fecha_fin;
            $servicio->hora_inicio = $tour->hora_salida;
            $servicio->hora_fin = $tour->hora_retorno;
            // Obtiene el numero de dias entre el Check-in y check-out
            $servicio->dias = 1;
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
            $servicio->descripcion = $tour->descripcion;
            $servicio->save();

        $equipo->forceFill(['faltante' => ($totalcliente)])->save();
        $equipo->forceFill(['total' => ($totalcliente)])->save();

        return $equipo->id;
        } catch (Throwable $t) {
            return "null";
        }
        //return redirect()->route('admin.tour.catalogo', $equipo);
        //$url = 'http://libviajes.me/admin/pagos/10/pagoServicio';
        //header('Location: ' . $url);
        //die();
    }

    public function createweb(Request $request)
    {
        try {
            // Code that may throw an Exception or Error.

            //return $request->all();
            $equipo = new Equipo();
            //$tour->email = Auth::user()->email;
            $equipo->nombre  = $request->nombre;
            $equipo->serie = $request->serie;
            $equipo->salida = $request->salida;
            $equipo->estado = $request->estado;
            $equipo->usuario = $request->usuario;
            $equipo->costo = $request->costo;
            $equipo->serie = $request->serie;
            $equipo->fecha_inicio = $request->fecha_inicio;
            $equipo->venta = $request->link;
            $equipo->descripcion = $request->descripcion;
            $idtour = $request->idtour;
            $equipo->anticipo = "0";
            $equipo->save();

            $totalcliente = 0;
            $total = null;
            //Insertar datos en la tabla Servicio los datos del equipo-servicio
            $tour =  Tour::find($idtour);
            $servicio = new Servicio();
            $servicio->cliente_id = $equipo->id;
            $servicio->tipo = $tour->recorrido;
            $servicio->tour_id = $request->idtour;
            $servicio->check_in = $equipo->fecha_inicio;
            $servicio->check_out = $equipo->fecha_fin;
            $servicio->hora_inicio = $tour->hora_salida;
            $servicio->hora_fin = $tour->hora_retorno;
            // Obtiene el numero de dias entre el Check-in y check-out
            $servicio->dias = 1;
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
            $servicio->descripcion = $tour->descripcion;
            $servicio->save();

            $equipo->forceFill(['faltante' => ($totalcliente)])->save();
            $equipo->forceFill(['total' => ($totalcliente)])->save();

        $url = '/admin/pagos/' . $equipo->id . '/pagoweb';
        header('Location: ' . $url);
        die();
        } catch (Throwable $t) {
            return $t;
        }
    }

    //link de listado de posts
    public function ver($tour)
    {
        //Visializacion de un tour en especifico
        if ($tour != null) {
            $tour =  Tour::find($tour);
            return json_decode($tour);
        }
        return json_decode("sintour");
    }
}
