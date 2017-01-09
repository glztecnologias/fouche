<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use DB;
use Excel;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rol;

class ExcelController extends Controller
{



	public function importExcel(Request $request)

	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->all();

			if(!empty($data) && $data->count()){
				$id_empresa = Auth::user()->empresas_id;
				foreach ($data as $item) {
          $usuario = User::firstOrNew(['rut' => $item->rut]);
					if($usuario->nombre != "Administrador" || $usuario->roles_id != 1 )
					{
					$usuario->nombre = $item->nombre;
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

        return back();
			}
		}


		//return back();
	}

}
