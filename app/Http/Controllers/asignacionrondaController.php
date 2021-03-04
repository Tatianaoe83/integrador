<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\asignacionronda;
use Illuminate\Http\Request;

class asignacionrondaController extends Controller
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
            $asignacionronda = asignacionronda::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('servicio', 'LIKE', "%$keyword%")
                ->orWhere('empleado', 'LIKE', "%$keyword%")
                ->orWhere('horaInicio', 'LIKE', "%$keyword%")
                ->orWhere('horaFin', 'LIKE', "%$keyword%")
                ->orWhere('observacionInicial', 'LIKE', "%$keyword%")
                ->orWhere('observacionFinal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $asignacionronda = asignacionronda::latest()->paginate($perPage);
        }

        return view('asignacionronda.index', compact('asignacionronda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('asignacionronda.create');
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
        
        asignacionronda::create($requestData);

        return redirect('asignacionronda')->with('flash_message', 'asignacionronda added!');
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
        $asignacionronda = asignacionronda::findOrFail($id);

        return view('asignacionronda.show', compact('asignacionronda'));
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
        $asignacionronda = asignacionronda::findOrFail($id);

        return view('asignacionronda.edit', compact('asignacionronda'));
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
        
        $asignacionronda = asignacionronda::findOrFail($id);
        $asignacionronda->update($requestData);

        return redirect('asignacionronda')->with('flash_message', 'asignacionronda updated!');
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
        asignacionronda::destroy($id);

        return redirect('asignacionronda')->with('flash_message', 'asignacionronda deleted!');
    }
}
