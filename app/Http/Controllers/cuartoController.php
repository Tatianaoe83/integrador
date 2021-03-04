<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cuarto;
use Illuminate\Http\Request;
use Session;
use PDF;


class cuartoController extends Controller
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
            $cuarto = cuarto::where('idCuarto', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('ubicacion', 'LIKE', "%$keyword%")
                ->orWhere('idPiso', 'LIKE', "%$keyword%")
                ->orWhere('idArea', 'LIKE', "%$keyword%")
                ->orWhere('idEstatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cuarto = cuarto::latest()->paginate($perPage);
        }

        return view('cuarto.index', compact('cuarto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cuarto.create');
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
        
        cuarto::create($requestData);

        return redirect('cuarto')->with('flash_message', 'cuarto added!');
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
        $cuarto = cuarto::findOrFail($id);

        return view('cuarto.show', compact('cuarto'));
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
        $cuarto = cuarto::findOrFail($id);

        return view('cuarto.edit', compact('cuarto'));
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
        
        $cuarto = cuarto::findOrFail($id);
        $cuarto->update($requestData);

        return redirect('cuarto')->with('flash_message', 'cuarto updated!');
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
        cuarto::destroy($id);

        return redirect('cuarto')->with('flash_message', 'cuarto deleted!');
    }

     public function listaCuarto()
        {
            
        $cuarto=cuarto::select('idCuarto', 'nombre', 'ubicacion', 'idPiso', 'idArea', 'idEstatus')->get();

        $pdf = PDF::loadView('cuarto/listaCuarto',['cuarto' => $cuarto]);

        return $pdf->stream('cuarto.pdf');
    }
}
