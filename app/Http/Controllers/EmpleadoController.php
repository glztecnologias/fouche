<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Toma_medida as Toma_medida;
use App\Seleccion as Seleccion;
use App\Medida as Medida;
use App\Talla_sugeridas as Talla_sugeridas;
use App\Solicitud_medidas as Solicitud_medidas;
use App\M_hombre as M_hombre;
use App\M_mujer as M_mujer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request=null)
    {

        $rut = $request->rut;
        $codigo=$request->codigo;
        $toma=Toma_medida::where('codigo_acceso',$codigo)->first();
        $usuario=User::where('rut',$rut)->first();

        if($usuario && $toma)
          {
            $medidas_chek = Medida::where('users_id',$usuario->id)->where('toma_medida_id',$toma->id)->first();

            if($medidas_chek)
            {
              $mensaje = "Al parecer ya enviaste tus medidas!";
              return view('login',compact('mensaje'));
            }
            else
            {


            $seleccion_usuario = Seleccion::where('users_id',$usuario->id)->where('toma_medida_id',$toma->id)->first();
            if($seleccion_usuario)
            {
                if($usuario->sexo=="F" || $usuario->sexo=="f")
                {
                  return view('empleado.ficha_mujer',compact('usuario','toma'));
                }
                if($usuario->sexo=="M"|| $usuario->sexo=="m")
                {
                  return view('empleado.ficha_hombre',compact('usuario','toma'));
                }
            }
            else
            {
              $mensaje = "El usuario y/o Codigo no coinciden!";
              return view('login',compact('mensaje'));
            }

            }


          }
        else
          {
              $mensaje = "El usuario y/o Codigo no existen!";
              return view('login',compact('mensaje'));
          }




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

    public function guardar_medidas(Request $request)
    {
      $id_usuario = $request->id_usuario; //id usuario
      $id_toma_de_medida = $request->id_toma; //id de Toma de Medida

      $usuario = User::find($id_usuario); //datos de usuario
      if($usuario->sexo=="F" || $usuario->sexo =="f")
      {
        $solicitud_medidas = new Solicitud_medidas;
        $medidas_mujer = new M_mujer;
        $medidas = new Medida;
        $tallas_sugeridas = new Talla_sugeridas;

        $tallas_sugeridas->peso = $request->peso;
        $tallas_sugeridas->estatura = $request->estatura;
        $tallas_sugeridas->observaciones = $request->observaciones;
        $tallas_sugeridas->veston_chaqueta = $request->veston_chaqueta;
        $tallas_sugeridas->falda = $request->falda;
        $tallas_sugeridas->camisa_blusa = $request->camisa_blusa;
        $tallas_sugeridas->pantalon = $request->pantalon;
        $tallas_sugeridas->polera = $request->polera;

        $tallas_sugeridas->save(); //sacar id;


          $medidas_mujer->ancho_espalda = $request->ancho_espalda;
          $medidas_mujer->busto = $request->busto;
          $medidas_mujer->cintura = $request->cintura;
          $medidas_mujer->cadera_baja = $request->cadera_baja;
          $medidas_mujer->largo_manga = $request->largo_manga;
          $medidas_mujer->largo_falda = $request->largo_falda;
          $medidas_mujer->largo_pantalon = $request->largo_pantalon;
          $medidas_mujer->contorno_brazo = $request->contorno_brazo;
          $medidas_mujer->contorno_muslo = $request->contorno_muslo;

          $medidas_mujer->save(); //sacar id;

      //  $solicitud_medidas->pantalon1_falda1 = $request->pantalon1_falda1;
      //  $solicitud_medidas->pantalon2 = $request->pantalon2;
      //  $solicitud_medidas->falda2 = $request->faldas2;

      //  $solicitud_medidas->save();


        $medidas->users_id = $id_usuario;
        $medidas->tallas_sugeridas_id = $tallas_sugeridas->id;
        $medidas->toma_medida_id = $id_toma_de_medida;
        //$medidas->solicitudes_medidas_id = $solicitud_medidas->id;
        $medidas->m_mujeres_id = $medidas_mujer->id;

        $medidas->save();
        $mensaje = "Registro de Datos Exitoso!";
        return view('login',compact('mensaje'));


      }
      if($usuario->sexo=="M" || $usuario->sexo=="m" )
      {
        $tallas_sugeridas = new Talla_sugeridas; //1ro
        $medidas_hombre = new M_hombre; //2do
        $medidas = new Medida; //3ro

//TALLAS SUGERIDAS************************************************************

  //falta observaciones!!!!
        $tallas_sugeridas->veston_chaqueta = $request->veston_chaqueta;
        $tallas_sugeridas->camisa_blusa = $request->camisa_blusa;
      //  $tallas_sugeridas->polera = $request->
        $tallas_sugeridas->pantalon = $request->pantalon;
      //  $tallas_sugeridas->falda = $request->
        $tallas_sugeridas->estatura = $request->estatura;
        $tallas_sugeridas->peso = $request->peso;
        $tallas_sugeridas->observaciones = $request->observaciones;
        $tallas_sugeridas->save();
//MEDIDAS HOMBRE**************************************************************
        $medidas_hombre->veston_largo = $request->largo_veston;
        $medidas_hombre->veston_ancho_espalda = $request->ancho_espalda_veston;
        $medidas_hombre->veston_largo_manga = $request->largo_manga_veston;
        $medidas_hombre->veston_contorno_pecho = $request->contorno_pecho_veston;
        $medidas_hombre->veston_contorno_cintura = $request->contorno_cintura_veston;
        $medidas_hombre->pantalon_contorno_cintura = $request->contorno_cintura_pantalon;
        $medidas_hombre->pantalon_largo_total = $request->largo_pantalon;
        $medidas_hombre->pantalon_ancho_cadera = $request->ancho_cadera_pantalon;
        $medidas_hombre->pantalon_contorno_rodilla = $request->contorno_rodilla_pantalon;
        $medidas_hombre->pantalon_contorno_basta = $request->contorno_basta_pantalon;
        $medidas_hombre->contorno_cuello_cm = $request->contorno_cuello;
        $medidas_hombre->camisa_cuello_n = $request->numero_camisa;
        $medidas_hombre->save();

        $medidas->users_id = $id_usuario;
        $medidas->tallas_sugeridas_id = $tallas_sugeridas->id;
        $medidas->toma_medida_id = $id_toma_de_medida;
        $medidas->m_hombres_id = $medidas_hombre->id;
        $medidas->save();

        $mensaje = "Registro de Datos Exitoso!";
        return view('login',compact('mensaje'));
      }
    }
}
