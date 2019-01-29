<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Mail as Mail;
use DB;
use Excel;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rol as Rol;
use App\Empresa as Empresa;
use App\Pedido as Pedido;
use App\Toma_medida as Toma_medida;
use App\Seleccion as Seleccion;
class ExcelController extends Controller
{



	public function importExcel(Request $request)

	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->all();

			$admin = User::where('roles_id',1)->first();
			if(!empty($data) && $data->count()){
				$id_empresa = Auth::user()->empresas_id;
				foreach ($data as $item) {
          $usuario = User::firstOrNew(['rut' => $item->rut]);
					if($usuario->nombre != $admin->nombre || $usuario->roles_id != 1 )
					{
					$usuario->nombre = $item->nombre;
					$usuario->email = $item->email;
          $usuario->telefono = $item->telefono;
          $usuario->sexo = $item->sexo;
          $usuario->nombre_sucursal = $item->nombre_sucursal;
          $usuario->direccion_sucursal = $item->direccion_sucursal;
					$usuario->roles_id = 3;
					$usuario->empresas_id = $id_empresa;

						$usuario->save();
					}


        }

				// if(!empty($insert)){
					// DB::table('items')->insert($insert);
					// dd('Insert Record successfully.');
				// }

        return redirect()->action('EmpresaController@empleados');
			}
		}


		//return back();
	}


	public function importExcel2(Request $request)

	{
		$user = Auth::user();
		$id_empresa = Auth::user()->empresas_id;

		$empleados_x = collect([]);

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) { })->all();

			$admin = User::where('roles_id',1)->first();

			if(!empty($data) && $data->count())
			{

					foreach ($data as $item)
					{
						$usuario = User::firstOrNew(['rut' => $item->rut]);
						if($usuario->nombre != $admin->nombre || $usuario->roles_id != 1 )
						{
							$usuario->nombre = $item->nombre;
							$usuario->email = $item->email;
							$usuario->telefono = $item->telefono;
							$usuario->sexo = $item->sexo;
							$usuario->nombre_sucursal = $item->nombre_sucursal;
							$usuario->direccion_sucursal = $item->direccion_sucursal;
							$usuario->roles_id = 3;
							$usuario->empresas_id = $id_empresa;
							$usuario->save();
							$empleados_x->push($usuario);
						}
					}

				$empresa = Empresa::find($id_empresa);
				$tomas = Toma_medida::where('empresas_id',$id_empresa)->get();
				$countx = $tomas->count()+1;
				$codigo = $empresa->nombre."#".$countx;//."-".$count+1; //crear codigo.
				$orden_compra = $request->orden_de_compra;

				$toma_medida = new Toma_medida;
				$toma_medida->codigo_acceso =$codigo;
				$toma_medida->orden_de_compra = $request->orden_de_compra;
				$toma_medida->estado ='abierta';
				$toma_medida->empresas_id = $user->empresas_id;
				$toma_medida->save();

				foreach ($empleados_x as $empleado)
				{
					$empleado_seleccionado = new Seleccion;
					$empleado_seleccionado->users_id = $empleado->id;
					$empleado_seleccionado->toma_medida_id = $toma_medida->id;
					$empleado_seleccionado->save();

					Mail::send('mail.credenciales_empleado',['nombre'=>$empleado->nombre,'empresa'=>$empleado->empresa->nombre,'codigo'=>$codigo,'rut'=>$empleado->rut], function ($message) use ($empleado) {
					$message->from('intra.fouche@gmail.com', 'Fouche.cl');
					$message->to($empleado->email)->subject('Importante! Envia tus medidas a fouche!');
					});
				}

			     $pedido = new Pedido;
			     $pedido->total_empleados = $toma_medida->seleccion->count();
			     $pedido->seccion_empresa = $toma_medida->seccion_empresa;
			     $pedido->orden_de_compra = $toma_medida->orden_de_compra;
			     $pedido->toma_medida_id = $toma_medida->id;
			     $pedido->empresas_id = $user->empresas_id;
			     $pedido->save();

				return redirect()->action('EmpresaController@index');
			}
		}
	}




}
