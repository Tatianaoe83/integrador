<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\Pabellon;
use App\asignacioncuarto;
use Illuminate\Http\Request;


class AsignacionCuartoController extends Controller   
{
	 public function index()
    {
        $pacientes=paciente::all();
        return view('asignacioncuarto',compact('pacientes'));
    
	 }
	  public function create()
    {
        return view('formCuarto');
    }

   public function store(Request $request)
    {
        $idPaciente= $request->get('pacien');
        $idPabellon = $request->get('idPabellon');
        $fechaEntrada = $request->get('fechaEntrada');
        $horaEntrada =$request->get('horaEntrada');
        $fechaSalida = $request->get('fechaSalida');
        $horaSalida =$request->get('horaSalida');
        $opaciente=Paciente::find($idPaciente);
        $opaciente->pabellon()->attach($idPabellon, ['fechaEntrada'=>$fechaEntrada,'horaEntrada'=>$horaEntrada,'fechaSalida'=>$fechaSalida,'horaSalida'=>$horaSalida ]);
        
        return view('asignacioncuarto');
    }

	
}
