<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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

    public function cuenta()
    {
        $user = Auth::user();
        return view('admin.cuenta',compact('user'));
    }

}
