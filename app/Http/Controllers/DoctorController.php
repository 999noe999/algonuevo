<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use App\Models\Especialidades;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctores = Doctores::with('especialidades')->get();
        return view('doctores.index', compact('doctores'));
    }

    public function create()
    {
        $especialidades = Especialidades::all();
        return view('doctores.create', compact('especialidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:doctores',
            'especialidadesId' => 'required',
        ]);
        Doctores::create($request->all());
        return redirect()->route('doctores.index')->with('success', 'Doctor creado con éxito.');
    }

    public function edit($id)
    {
        $doctor = Doctores::findOrFail($id);
        $especialidades = Especialidades::all();
        return view('doctores.edit', compact('doctor', 'especialidades'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:doctores,correo,' . $id,
            'especialidadesId' => 'required',
        ]);
        $doctor = Doctores::findOrFail($id);
        $doctor->update($request->all());
        return redirect()->route('doctores.index')->with('success', 'Doctor actualizado con éxito.');
    }

    public function destroy($id)
    {
        Doctores::destroy($id);
        return redirect()->route('doctores.index')->with('success', 'Doctor eliminado con éxito.');
    }
}
