<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Especialidad;
use Illuminate\Http\Request;
use Session;
use PDF;

class EspecialidadController extends Controller
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
            $especialidad = Especialidad::where('idEspecialidad', 'LIKE', "%$keyword%")
                ->orWhere('Especialidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $especialidad = Especialidad::latest()->paginate($perPage);
        }

        return view('especialidad.index', compact('especialidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('especialidad.create');
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
        
        Especialidad::create($requestData);

        return redirect('especialidad')->with('flash_message', 'Especialidad added!');
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
        $especialidad = Especialidad::findOrFail($id);

        return view('especialidad.show', compact('especialidad'));
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
        $especialidad = Especialidad::findOrFail($id);

        return view('especialidad.edit', compact('especialidad'));
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
        
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->update($requestData);

        return redirect('especialidad')->with('flash_message', 'Especialidad updated!');
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
        Especialidad::destroy($id);

        return redirect('especialidad')->with('flash_message', 'Especialidad deleted!');
    }

     public function listaEspecialidad()
        {
            
        $especialidad=especialidad::select('idEspecialidad', 'Especialidad')->get();

        $pdf = PDF::loadView('especialidad/listaEspecialidad',['especialidad' => $especialidad]);

        return $pdf->stream('especialidad.pdf');
    }
}
