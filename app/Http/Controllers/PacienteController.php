<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paciente;
use Illuminate\Http\Request;
use Session;
use PDF;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $paciente = Paciente::where('idPaciente', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('fecha_nacimiento', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('enfermedad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paciente = Paciente::latest()->paginate($perPage);
        }

        return view('paciente.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Paciente::create($requestData);

        return redirect('paciente')->with('flash_message', 'Paciente added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $paciente = Paciente::findOrFail($id);
        $paciente->update($requestData);

        return redirect('paciente')->with('flash_message', 'Paciente updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Paciente::destroy($id);

        return redirect('paciente')->with('flash_message', 'Paciente deleted!');
    }

     public function listaPaciente()
        {
            
        $paciente=paciente::select('idPaciente', 'nombre', 'apellidos', 'sexo', 'fecha_nacimiento', 'telefono', 'direccion', 'enfermedad')->get();

        $pdf = PDF::loadView('paciente/listaPaciente',['paciente' => $paciente]);

        return $pdf->stream('paciente.pdf');
    }
}
