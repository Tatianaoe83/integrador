<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\empleado;
use Illuminate\Http\Request;
use Session;
use PDF;

class empleadoController extends Controller
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
            $empleado = empleado::where('idEmpleado', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('apellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('idTipoEmpleado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empleado = empleado::latest()->paginate($perPage);
        }

        return view('empleado.index', compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('empleado.create');
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
        
        empleado::create($requestData);

        return redirect('empleado')->with('flash_message', 'empleado added!');
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
        $empleado = empleado::findOrFail($id);

        return view('empleado.show', compact('empleado'));
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
        $empleado = empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
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
        
        $empleado = empleado::findOrFail($id);
        $empleado->update($requestData);

        return redirect('empleado')->with('flash_message', 'empleado updated!');
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
        empleado::destroy($id);

        return redirect('empleado')->with('flash_message', 'empleado deleted!');
    }


    public function listaEmpleado()
        {
            
        $empleado=empleado::select('idEmpleado','nombre','apellidoMaterno', 'apellidoPaterno', 'direccion', 'telefono', 'sexo')->get();

        $pdf = PDF::loadView('empleado/listaEmpleado',['empleado' => $empleado]);

        return $pdf->stream('empleado.pdf');
    }
}
