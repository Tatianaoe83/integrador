<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete;
use App\Hospital;
use App\Suscripcion;
use Illuminate\Http\Request;
use Session;
use PDF;

class SuscripcionController extends Controller
{
   

    public function index()
    {
         $Paquetes=Paquete::all();
        return view('Suscripcion',compact('Paquetes'));
    }

       public function create()
    {
        return view('graficaPaquete');
    }

       public function listaSuscripciones()
        {
            
        $Paquetes=Suscripcion::select('idPaquete', 'idHospital', 'fecha_inscripcion','fecha_fin')->get();

        $pdf = PDF::loadView('listaSuscripciones',['Paquetes' => $Paquetes]);

        return $pdf->stream('Suscripciones.pdf');
    }

}
