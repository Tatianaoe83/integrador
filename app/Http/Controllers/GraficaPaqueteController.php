<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Suscripcion;


class GraficaPaqueteController extends Controller
{
    //
    public function graficaPaquete()
    {
        $Basico=Suscripcion::select(DB::raw('count(*) as idPaquete'))
        ->where('idPaquete','=','1')
        ->groupBy('idPaquete')
        ->get()->toArray();
        
        $Basico = array_column($Basico,'idPaquete');

        $Estandar=Suscripcion::select(DB::raw('count(*) as idPaquete'))
        ->where('idPaquete','=','2')
        ->groupBy('idPaquete')
        ->get()->toArray();
        
        $Estandar= array_column($Estandar,'idPaquete');

         $Premium=Suscripcion::select(DB::raw('count(*) as idPaquete'))
        ->where('idPaquete','=','3')
        ->groupBy('idPaquete')
        ->get()->toArray();
        
        $Premium= array_column($Premium,'idPaquete');
        
      

        return view('graficaPaquete')
        ->with('Basico',json_encode($Basico,JSON_NUMERIC_CHECK))
        ->with('Estandar',json_encode($Estandar,JSON_NUMERIC_CHECK))
        ->with('Premium',json_encode($Premium,JSON_NUMERIC_CHECK));
         }
        
       }

