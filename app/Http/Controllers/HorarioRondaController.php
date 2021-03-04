<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servicio;
use App\empleado;
use App\horarioronda;
use Illuminate\Http\Request;


class HorarioRondaController extends Controller
{
	public function index()
    {
         $servicios=servicio::all();
        return view('horarioronda',compact('servicios'));
    }

     public function create()
    {
        return view('formRonda');
    }

}
