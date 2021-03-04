<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estatus;
use Illuminate\Http\Request;
use Session;
use PDF;

class EstatusController extends Controller
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
            $estatus = Estatus::where('idEstatus', 'LIKE', "%$keyword%")
                ->orWhere('estatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estatus = Estatus::latest()->paginate($perPage);
        }

        return view('estatus.index', compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estatus.create');
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
        
        Estatus::create($requestData);

        return redirect('estatus')->with('flash_message', 'Estatus added!');
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
        $estatus = Estatus::findOrFail($id);

        return view('estatus.show', compact('estatus'));
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
        $estatus = Estatus::findOrFail($id);

        return view('estatus.edit', compact('estatus'));
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
        
        $estatus = Estatus::findOrFail($id);
        $estatus->update($requestData);

        return redirect('estatus')->with('flash_message', 'Estatus updated!');
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
        Estatus::destroy($id);

        return redirect('estatus')->with('flash_message', 'Estatus deleted!');
    }

     public function listaEstatus()
        {
            
        $estatus=estatus::select('idEstatus', 'estatus')->get();

        $pdf = PDF::loadView('estatus/listaEstatus',['estatus' => $estatus]);

        return $pdf->stream('estatus.pdf');
    }
}
