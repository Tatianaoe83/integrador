<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\cuarto;


class GraficaController extends Controller
{
    //
    public function grafica()
    {
    	$Disponible=cuarto::select(DB::raw('count(*) as idEstatus'))
    	->where('idEstatus','=','8')
    	->groupBy('idEstatus')
    	->get()->toArray();
    	
    	$Disponible = array_column($Disponible,'idEstatus');

        $Ocupado=cuarto::select(DB::raw('count(*) as idEstatus'))
        ->where('idEstatus','=','7')
        ->groupBy('idEstatus')
        ->get()->toArray();
        
        $Ocupado= array_column($Ocupado,'idEstatus');

         $Mantenimiento=cuarto::select(DB::raw('count(*) as idEstatus'))
        ->where('idEstatus','=','1')
        ->groupBy('idEstatus')
        ->get()->toArray();
        
        $Mantenimiento= array_column($Mantenimiento,'idEstatus');
        
      

        return view('grafica')
    	->with('Disponible',json_encode($Disponible,JSON_NUMERIC_CHECK))
        ->with('Ocupado',json_encode($Ocupado,JSON_NUMERIC_CHECK))
        ->with('Mantenimiento',json_encode($Mantenimiento,JSON_NUMERIC_CHECK));
         }
        
       }

