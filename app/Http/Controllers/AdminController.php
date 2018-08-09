<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail as Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User as User;
use App\Empresa as Empresa;
use App\Pedido as Pedido ;
use App\Rol as Rol;
use App\Medida as Medida;
use App\Compostura as Compostura;
use App\Seleccion as Seleccion;
use App\Toma_medida as Toma_medida;
use App\Prenda as Prenda;
use App\Orden_corte as Orden_corte;
use App\M_corte_superior as M_corte_superior;
use App\M_corte_inferior as M_corte_inferior;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $empresas = Empresa::all();
        $pedidos = Pedido::All();
        $composturas = Compostura::All();
      //  $empresas = Empresas::All();
        return view('admin.index',compact('user','empresas','pedidos','composturas'));
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

    public function empresas()
    {
      $usuarios_empresas = User::where('roles_id',2)->get();
      $user = Auth::user();
      return view('admin.empresas',compact('user','usuarios_empresas'));
    }

    public function nueva_empresa()
    {
      return view('admin.empresa_new');
    }

    public function crea_empresa(Request $request)
    {
      $empresa = new Empresa;
      $usuario_empresa = new User;

      $empresa->nombre = $request->nombre;
      $empresa->email = $request->email;
      $empresa->direccion = $request->direccion;
      $empresa->password = $request->password;
      $empresa->telefono = $request->telefono;
      $empresa->ciudad = $request->ciudad;
      $empresa->rut = $request->rut;
      $empresa->save();

      $usuario_empresa->nombre = $request->nombre;
      $usuario_empresa->email = $request->email;
      $usuario_empresa->password = bcrypt($request->password);
      $usuario_empresa->roles_id = 2;
      $usuario_empresa->empresas_id = $empresa->id;
      $usuario_empresa->rut = $request->rut;
      $usuario_empresa->estado = 'activo';
      $usuario_empresa->save();

      //$user = Auth::user();

      return redirect('/admin/empresas');
      //return view('admin.empresas', compact('user'));


    }

    public function cambia_estado_empresa($id,$estado)
    {
      $usuario_empresa = User::find($id);
      if($estado=="activa")
      {
        $usuario_empresa->estado = 'activo';
      }

      if($estado=="desactiva")
      {
        $usuario_empresa->estado = 'inactivo';
      }
      $usuario_empresa->save();
      return redirect('/admin/empresas');
    }

    public function elimina_empresa(Request $request)
    {
      $id =  $request->id;
      //Elimina Usuarios de Empresa y Empresa.
      User::where('empresas_id',$id)->delete();
      Empresa::destroy($id);
      $check_empresa = Empresa::find($id);
      if($check_empresa)
      {
      return "error";
      }
      else
      {
      return "ok";
      }

    }

    public function edita_empresa($id)
    {
    $user_empresa = User::where('empresas_id',$id)->where('roles_id',2)->first();
    $empresa = Empresa::find($id);
    return view('admin.empresa_edit', compact('user_empresa','empresa'));
      //, compact('user_empresa','empresa')
    }

    public function actualiza_empresa(Request $request, $id)
    {
      $empresa = Empresa::find($id);
      $usuario_empresa = User::where('roles_id',2)->where('empresas_id',$id)->first();

      $empresa->nombre = $request->nombre;
      $empresa->email = $request->email;
      $empresa->direccion = $request->direccion;
      $empresa->password = $request->password;
      $empresa->telefono = $request->telefono;
      $empresa->ciudad = $request->ciudad;
      $empresa->rut = $request->rut;
      $empresa->save();

      $usuario_empresa->nombre = $request->nombre;
      $usuario_empresa->email = $request->email;
      $usuario_empresa->password = bcrypt($request->password);
      $usuario_empresa->roles_id = 2;
      $usuario_empresa->empresas_id = $empresa->id;
      $usuario_empresa->rut = $request->rut;
      $usuario_empresa->estado = 'activo';
      $usuario_empresa->save();

      //$user = Auth::user();

      return redirect('/admin/empresas');

    }

    public function credenciales_a_empresa(Request $request)
    {
      $id_empresa = $request->id;
      $empresa = Empresa::find($id_empresa);

      $nombre = $empresa->nombre;
      $email = $empresa->email;
      $pass = $empresa->password;

      Mail::send('mail.credenciales_empresa',['nombre'=>$nombre,'email'=>$email,'password'=>$pass], function ($message) use ($empresa) {
      $message->from('intra.fouche@gmail.com', 'Fouche.cl');
      $message->to($empresa->email)->subject('Tus credenciales de acceso a intra.fouche.cl!');
      });

      if(count(Mail::failures()) > 0)
      {
        return "error";
      }
      else
      {
        return "ok";
      }

    }

    public function pedidos()
    {
        $user = Auth::user();
        $pedidos = Pedido::all();
        return view('admin.pedidos',compact('user','pedidos'));
    }

    public function trae_detalle_pedido($id)
    {
      $user = Auth::user();
      $pedido = Pedido::find($id);
      $toma_medida = Toma_medida::find($pedido->toma_medida_id);

      $empleados = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user_m = User::find($seleccionado->users_id);
        $empleados->push($user_m);
      }

      return view('admin.detalle_pedido', compact('pedido','toma_medida','empleados'));
    }

    public function trae_ficha($id_empleado,$id_toma)
    {
      $user = Auth::user();
      $medida = Medida::where('users_id',$id_empleado)->where('toma_medida_id',$id_toma)->first();
      return view('admin.detalle_ficha', compact('medida'));
    }

    public function composturas()
    {
        $user = Auth::user();
        $composturas = Compostura::all();
        return view('admin.composturas',compact('user','composturas'));
    }

    public function ordenes_corte()
    {
      $ordenes_corte = Orden_corte::all();
      $user = Auth::user();
      return view('admin.ordenes_corte',compact('user','ordenes_corte'));
    }

    public function nuevo_orden_corte($id)
    {
        $articulos = Prenda::all();
        $pedido = Pedido::find($id);

        return view('admin.orden_corte_new',compact('articulos','pedido'));
    }

    public function crear_orden_corte(Request $request)
    {
      $orden_corte = new Orden_corte;

      $orden_corte->total_orden_corte =  $request->total_orden_corte ;
      $orden_corte->tela = $request->tela;
      $orden_corte->tela_aplicacion = $request->tela_aplicacion;
      $orden_corte->forro = $request->forro;
      $orden_corte->fusionado = $request->fusionado;
      $orden_corte->color_tela =  $request->color_tela;
      $orden_corte->pedidos_id = $request->pedidos_id;
      $orden_corte->prendas_id = $request->prendas_id;
      $orden_corte->save();

      $pedido = Pedido::find($orden_corte->pedidos_id);
      $toma_medida = Toma_medida::find($pedido->toma_medida_id);
      $empleados = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user_m = User::find($seleccionado->users_id);
        $empleados->push($user_m);
      }

      $prenda = Prenda::find($orden_corte->prendas_id);
      $count = $empleados->count();
      $zona = $prenda->sup_inf;

      if($zona == "superior")
      {
          foreach ($empleados as $empleado)
          {
            $m_corte_superior = new M_corte_superior;
            $m_corte_superior->talla= "s/d";
            $m_corte_superior->busto_pecho = "s/d";
            $m_corte_superior->cintura = "s/d";
            $m_corte_superior->cadera = "s/d";
            $m_corte_superior->largo_manga = "s/d";
            $m_corte_superior->largo_total = "s/d";
            $m_corte_superior->ancho_hombro = "s/d";
            $m_corte_superior->contorno_brazo = "s/d";
            $m_corte_superior->observaciones = "s/d";
            $m_corte_superior->ordenes_corte_id = $orden_corte->id;
            $m_corte_superior->users_id  = $empleado->id;
            $m_corte_superior->save();
          }
      }


      if($zona == "inferior")
      {
        foreach ($empleados as $empleado)
        {
          $m_corte_inferior = new M_corte_inferior;
          $m_corte_inferior->talla = "s/d";
          $m_corte_inferior->cintura = "s/d";
          $m_corte_inferior->cadera = "s/d";
          $m_corte_inferior->largo_total = "s/d";
          $m_corte_inferior->tiro_delantero = "s/d";
          $m_corte_inferior->tiro_trasero = "s/d";
          $m_corte_inferior->tipo_completo = "s/d";
          $m_corte_inferior->contorno_pierna = "s/d";
          $m_corte_inferior->observaciones = "s/d";

          $m_corte_inferior->ordenes_corte_id = $orden_corte->id;
          $m_corte_inferior->users_id  = $empleado->id;
          $m_corte_inferior->save();

        }


      }

      return redirect('/admin/ordenes_corte');

    }

    public function elimina_orden_corte(Request $request)
    {
      $id =  $request->id;

      Orden_corte::destroy($id);
      M_corte_superior::where('ordenes_corte_id',$id)->delete();
      M_corte_superior::where('ordenes_corte_id',$id)->delete();
      $check_orden = Orden_corte::find($id);

      if($check_orden)
      {
      return "error";
      }
      else
      {
      return "ok";
      }

    }

    public function edita_orden_corte($id)
    {
        $orden_corte = Orden_corte::find($id);
        $articulos = Prenda::all();
        return view('admin.orden_corte_edit',compact('orden_corte','articulos'));
    }

    public function edita_m_corte_unico(Request $request)
    {
      $id_corte = $request->id;
      $contenido = $request->cont;

      $datos = explode("-", $id_corte);

      $campo = $datos[0];
      $id_real = $datos[1];
      $zona = $datos[2];

      if($zona == "sup")
      {
      $registro_corte = M_corte_superior::find($id_real);
      $registro_corte->$campo = $contenido;
      $registro_corte->save();
        if($registro_corte->$campo == $contenido)
        {
          return "ok";
        }
        else
        {
          return "error";
        }

      }

      if($zona == "inf")
      {
        $registro_corte = M_corte_inferior::find($id_real);
        $registro_corte->$campo = $contenido;
        $registro_corte->save();
          if($registro_corte->$campo == $contenido)
          {
            return "ok";
          }
          else
          {
            return "error";
          }
      }


    }


    public function actualiza_orden_corte(Request $request, $id)
    {
      $orden_corte = Orden_corte::find($id);

      $orden_corte->tela = $request->tela;
      $orden_corte->tela_aplicacion = $request->tela_aplicacion;
      $orden_corte->forro = $request->forro;
      $orden_corte->fusionado = $request->fusionado;
      $orden_corte->color_tela =  $request->color_tela;
      $orden_corte->prendas_id = $request->prendas_id;
      $orden_corte->save();
      return redirect('/admin/ordenes_corte');
    }

    public function orden_lista($id)
    {
      $user = Auth::user();
      $orden_corte = Orden_corte::find($id);
      $articulo = Prenda::find($orden_corte->prendas_id);


      $pedido = Pedido::find($orden_corte->pedidos_id);
      $toma_medida = Toma_medida::find($pedido->toma_medida_id);

      $empleados = collect([]);
      foreach ($toma_medida->seleccion as $seleccionado)
      {
        $user_m = User::find($seleccionado->users_id);
        $empleados->push($user_m);
      }
      if ($articulo->sup_inf =="superior")
      {
        $oc_medidas = M_corte_superior::where('ordenes_corte_id',$id)->get();
      }
      if ($articulo->sup_inf =="inferior")
      {
        $oc_medidas = M_corte_inferior::where('ordenes_corte_id',$id)->get();
      }



      return view('admin.orden_lista',compact('user','orden_corte','articulo','oc_medidas'));

    }


    public function m_articulos()
    {
      $user = Auth::user();
      $articulos = Prenda::all();
      return view('admin.m_articulos', compact('user','articulos'));
    }

    public function nuevo_articulo()
    {
      return view('admin.articulo_new');
    }

    public function crea_articulo(Request $request)
    {
      $prenda = new Prenda;
      $prenda->nombre = $request->nombre;
      $prenda->codigo = $request->codigo;
      $prenda->sup_inf = $request->sup_inf;
      $prenda->save();
      return redirect('/admin/m_articulos');

    }

    public function edita_articulo($id)
    {
      $prenda = Prenda::find($id);
      return view('admin.articulo_edit',compact('prenda'));
    }

    public function actualiza_articulo(Request $request, $id)
    {
      $prenda = Prenda::find($id);
      $prenda->nombre = $request->nombre;
      $prenda->codigo = $request->codigo;
      $prenda->sup_inf = $request->sup_inf;
      $prenda->save();
      return redirect('/admin/m_articulos');

    }

    public function elimina_articulo(Request $request)
    {
      $id =  $request->id;
      Prenda::destroy($id);
      $check_prenda = Prenda::find($id);
      if($check_prenda)
      {
      return "error";
      }
      else
      {
      return "ok";
      }

    }


    public function cuenta()
    {
        $user = Auth::user();
        return view('admin.cuenta',compact('user'));
    }

    public function actualiza_cuenta(Request $request)
    {
      $user = Auth::user();
      $user->direccion_sucursal = $request->direccion_sucursal;
      $user->telefono = $request->telefono;
      $user->save();
      return view('admin.cuenta',compact('user'));
    }

    public function cambia_estado_compostura(Request $request)
    {

      $compostura = Compostura::find($request->id);
      $compostura->estado = $request->estado;
      if($request->estado=='transito_a_fouche')
      {
        $compostura->fecha_envio_a_fouche = date('Y-m-d H:i:s');
      }

      if($request->estado=='en_fouche')
      {
        $compostura->fecha_llegada_prenda = date('Y-m-d H:i:s');
        $fecha = date('Y-m-d');
        $dias = 15;
        $datestart= strtotime($fecha);
        $diasemana = date('N',$datestart);
        $totaldias = $diasemana+$dias;
        $findesemana =  intval( $totaldias/5) *2 ;
        $diasabado = $totaldias % 5 ;
        if ($diasabado==6) $findesemana++;
        $total = (($dias+$findesemana) * 86400)+$datestart ;
        $compostura->fecha_tope_entrega = date('Y-m-d', $total);



      }

      if($request->estado=='transito_a_empresa')
      {
        $compostura->fecha_envio_a_empresa = date('Y-m-d H:i:s');
      }

      if($request->estado=='recibido')
      {
        $compostura->fecha_recibido = date('Y-m-d H:i:s');

      }

      $compostura->save();
      return "ok";
    }



}
