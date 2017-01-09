<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User as User;
use App\Toma_medida as Toma_medida;
use App\Seleccion as Seleccion;
use App\Pedido as Pedido;
use App\Medida as Medida;
use App\Compostura as Compostura;
use App\Empresa as Empresa;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $user = Auth::user();
        $empleados = User::where('roles_id',3)->where('empresas_id',$user->empresas_id)->get();
        $toma_medida = Toma_medida::whereEstado('abierta')->where('empresas_id',$user->empresas_id)->get();
        $pedidos = Pedido::where('empresas_id',$user->empresas_id)->get();
        $composturas_empresa = collect([]);
        $composturas = Compostura::all();
        foreach ($composturas as $compostura)
        {
          if ($compostura->users)
          {
            if($compostura->users->empresas_id == $user->empresas_id)
             {
                $composturas_empresa->push($compostura);
             }
          }
        }

        return view('empresa.index', compact('user','empleados','toma_medida','pedidos','composturas_empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //FUNCIONES NO RESTFULL
    public function empleados()
    {
        $user = Auth::user();
        $empleados = User::where('roles_id',3)->where('empresas_id',$user->empresas_id)->get();

        return view('empresa.empleados', compact('user','empleados'));
    }

    public function nuevo_empleado()
    {
        return view('empresa.empleados_new');
    }

    public function multiple_empleado()
    {
        return view('empresa.carga_multiple');
    }

    public function crear_empleado(Request $request)
    {
        $user = Auth::user();
        $empleado = new User;
        $empleado->nombre = $request->nombre;
        $empleado->telefono = $request->telefono;
        $empleado->sexo = $request->sexo;
        $empleado->nombre_sucursal = $request->nombre_sucursal;
        $empleado->direccion_sucursal = $request->direccion_sucursal;
        $empleado->roles_id = 3;
        $empleado->empresas_id = $user->empresas_id;
        $empleado->rut = $request->rut;
        $empleado->estado = 'activo';
        $empleado->save();

        return redirect('/empresa/empleados');

    }

    public function elimina_empleado(Request $request)
    {
      $id =  $request->id;
      User::destroy($id);
      $check_usuario = User::find($id);
      if($check_usuario)
      {
      return "error";
      }
      else
      {
      return "ok";
      }

    }

    public function edita_empleado($id)
    {
      $empleado = User::find($id);
      return view('empresa.empleados_edit', compact('empleado'));
    }

    public function actualiza_empleado(Request $request, $id)
    {
      $empleado = User::find($id);


      $empleado->nombre = $request->nombre;
      $empleado->telefono = $request->telefono;
      $empleado->sexo = $request->sexo;
      $empleado->nombre_sucursal = $request->nombre_sucursal;
      $empleado->direccion_sucursal = $request->direccion_sucursal;
      $empleado->rut = $request->rut;
      $empleado->save();

      return redirect('/empresa/empleados');

    }

    public function verifica_codigo(Request $request)
    {
      $codigo = $request->cod;
      return $count = Toma_medida::where('codigo_acceso',$codigo)->count();

    }

    public function crea_toma_medida(Request $request)
    {
      $user = Auth::user();
      $id_empleados = json_decode($request->ids);

      $seccion = $request->sec;
      $codigo = $request->cod;
     // $fecha_cierre = $request->f_c;

      $count = Toma_medida::where('codigo_acceso',$codigo)->count();

      if($count==0)
      {
        $toma_medida = new Toma_medida;
        $toma_medida->seccion_empresa =$seccion;
        $toma_medida->codigo_acceso =$codigo;
      //  $toma_medida->fecha_cierre =$fecha_cierre;
        $toma_medida->estado ='abierta';
        $toma_medida->empresas_id = $user->empresas_id;
        $toma_medida->save();

        foreach ($id_empleados as $id_empleado)
        {
          $empleado_seleccionado = new Seleccion;
          $empleado_seleccionado->users_id = $id_empleado;
          $empleado_seleccionado->toma_medida_id = $toma_medida->id;
          $empleado_seleccionado->save();
        }

        return "ok";

      }
      if($count>0)
      {
        return "nok";
      }

    }


    public function pedidos_medidas()
    {
        $user = Auth::user();
        $toma_medida = Toma_medida::whereEstado('abierta')->where('empresas_id',$user->empresas_id)->get();
        $pedidos = Pedido::where('empresas_id',$user->empresas_id)->get();
        return view('empresa.pedidos_medidas', compact('user','toma_medida','pedidos'));
    }

    public function ver_detalle_toma_medida($id)
    {
      $toma_medida = Toma_medida::find($id);
      //$seleccion = seleccion::where('toma_medida_id',$id)->get();
     $users = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user = User::find($seleccionado->users_id);
        $medida_check = $toma_medida->medida->where('users_id',$user->id)->first();
        if($medida_check)
        {
          $user->toma_check = "LISTO";
        }
        else{
            $user->toma_check = "FALTA";
        }
        $users->push($user);
      }

      //$medidos = Medida::where(users_id)
     $medida = $toma_medida->medida;
      return view('empresa.detalle_toma_medida',compact('toma_medida','users','medida'));
    }

    public function edita_toma_medida($id)
    {
      $toma_medida = Toma_medida::find($id);
      return view('empresa.edita_toma_medida',compact('toma_medida'));
    }

    public function actualiza_toma_medida(Request $request)
    {
      $id_toma =  $request->id_toma;
      $codigo = $request->codigo;
      $seccion = $request->seccion;
    //  $fecha_cierre = $request->fecha_cierre;

      $toma_medida = Toma_medida::find($id_toma);

      $toma_medida->seccion_empresa =$seccion;
      $toma_medida->codigo_acceso =$codigo;
    //  $toma_medida->fecha_cierre =$fecha_cierre;
      $toma_medida->save();
      return redirect('/empresa/pedidos_medidas');
    }

    public function elimina_toma_medida(Request $request)
    {
      $id =  $request->id;
      Toma_medida::destroy($id);
      Seleccion::where('toma_medida_id',$id)->delete();
      $check = Toma_medida::find($id);
      if($check)
      {
      return "error";
      }
      else
      {
      return "ok";
      }

    }

    public function toma_a_pedido($id)
    {
      $toma_medida = Toma_medida::find($id);
        return view('empresa.toma_a_pedido',compact('toma_medida'));
    }

    public function crea_pedido(Request $request)
    {
      $user = Auth::user();
      $id_toma = $request->id_toma;
      $toma_medida = Toma_medida::find($id_toma);
      $toma_medida->estado = "cerrada";
      $toma_medida->save();

      $pedido = new Pedido;
      $pedido->total_empleados = $toma_medida->seleccion->count();
      $pedido->seccion_empresa = $toma_medida->seccion_empresa;
      $pedido->orden_de_compra = $request->orden;
      $pedido->toma_medida_id = $id_toma;
      $pedido->empresas_id = $user->empresas_id;
      $pedido->save();

      ///creacion de pedido.

      return "ok";
    }

    public function ver_detalle_pedido($id)
    {

      $pedido = Pedido::find($id);
      $toma_medida = Toma_medida::find($pedido->toma_medida_id);

      $empleados = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user_m = User::find($seleccionado->users_id);
        $empleados->push($user_m);
      }

      return view('empresa.detalle_pedido', compact('pedido','toma_medida','empleados'));

    }

    public function hacer_compostura($id)
    {
      $pedido = Pedido::find($id);
      $toma_medida = Toma_medida::find($pedido->toma_medida_id);
      $empleados = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user_m = User::find($seleccionado->users_id);
        $empleados->push($user_m);
      }

      return view('empresa.compostura_pedido', compact('pedido','toma_medida','empleados'));

    }

    public function crea_compostura(Request $request)
    {
      $compostura = new Compostura;
      $compostura->prenda = $request->prenda;
      $compostura->color = $request->color;
      $compostura->error_prenda = $request->error;
      $compostura->compostura_solicitada = $request->compostura_solicitada;
      $compostura->pedidos_id = $request->id_pedido;
      $compostura->users_id = $request->usuario;
      $compostura->save();
      return redirect('/empresa/composturas');

    }

    public function lista_composturas()
    {
      $user = Auth::user();
      $composturas_empresa = collect([]);
      $composturas = Compostura::all();
    if($composturas->count()>0)
    {
    //  return $composturas;
      foreach ($composturas as $compostura)
      {
        if ($compostura->users)
        {
          if($compostura->users->empresas_id == $user->empresas_id)
           {
              $composturas_empresa->push($compostura);
           }
        }
      }
       return view('empresa.composturas', compact('user','composturas_empresa'));
    }
    else
    {
        return view('empresa.composturas', compact('user','composturas_empresa'));
    }




    }

    public function cuenta()
    {
        $user = Auth::user();
        $empresa = Empresa::find($user->empresas_id);
        return view('empresa.cuenta', compact('user','empresa'));
    }

    public function actualiza_cuenta(Request $request)
    {
      $user = Auth::user();
      $empresa = Empresa::find($user->empresas_id);
      $empresa->direccion = $request->direccion;
      $empresa->telefono = $request->telefono;
      $empresa->n_encargado = $request->n_encargado;
      $empresa->t_encargado = $request->t_encargado;
      $empresa->save();
      return redirect('/empresa/cuenta');
    }

}
