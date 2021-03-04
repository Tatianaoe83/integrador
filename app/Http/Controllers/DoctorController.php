<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Doctor;
use Illuminate\Http\Request;
use Session;
use PDF;

class DoctorController extends Controller
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
            $doctor = Doctor::where('idDoctor', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidos', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('idEspecialidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $doctor = Doctor::latest()->paginate($perPage);
        }

        return view('doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('doctor.create');
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
        
        Doctor::create($requestData);

        return redirect('doctor')->with('flash_message', 'Doctor added!');
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
        $doctor=doctor::select('idDoctor', 'nombre', 'idEspecialidad')->get();

        $pdf = PDF::loadView('doctor.lista',['doctor' => $doctor]);

        return $pdf->stream('doctor.pdf');
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
        $doctor = Doctor::findOrFail($id);

        return view('doctor.edit', compact('doctor'));
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
        
        $doctor = Doctor::findOrFail($id);
        $doctor->update($requestData);

        return redirect('doctor')->with('flash_message', 'Doctor updated!');
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
        Doctor::destroy($id);

        return redirect('doctor')->with('flash_message', 'Doctor deleted!');
    }

        public function listaDoctor()
        {
            
        $doctor=doctor::select('idDoctor', 'nombre','apellidos','telefono','email', 'idEspecialidad')->get();

        $pdf = PDF::loadView('doctor/listaDoctor',['doctor' => $doctor]);

        return $pdf->stream('doctor.pdf');
    }

         public function export()
        {
        
        Excel::shareView('doctor.lista')->create();
    }




    }
