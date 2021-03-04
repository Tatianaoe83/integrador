<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pabellon;
use Illuminate\Http\Request;
use Session;
use PDF;

class PabellonController extends Controller
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
            $pabellon = Pabellon::where('idPabellon', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('ubicacion', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('idCuarto', 'LIKE', "%$keyword%")
                ->orWhere('idEstatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pabellon = Pabellon::latest()->paginate($perPage);
        }

        return view('pabellon.index', compact('pabellon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pabellon.create');
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
        
        Pabellon::create($requestData);

        return redirect('pabellon')->with('flash_message', 'Pabellon added!');
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
        $pabellon = Pabellon::findOrFail($id);

        return view('pabellon.show', compact('pabellon'));
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
        $pabellon = Pabellon::findOrFail($id);

        return view('pabellon.edit', compact('pabellon'));
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
        
        $pabellon = Pabellon::findOrFail($id);
        $pabellon->update($requestData);

        return redirect('pabellon')->with('flash_message', 'Pabellon updated!');
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
        Pabellon::destroy($id);

        return redirect('pabellon')->with('flash_message', 'Pabellon deleted!');
    }

     public function listaPabellon()
        {
            
        $pabellon=pabellon::select('idPabellon', 'nombre', 'ubicacion', 'descripcion', 'idCuarto', 'idEstatus')->get();

        $pdf = PDF::loadView('pabellon/listaPabellon',['pabellon' => $pabellon]);

        return $pdf->stream('pabellon.pdf');
    }
}
