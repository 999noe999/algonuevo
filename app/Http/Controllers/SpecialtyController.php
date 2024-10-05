<?php
namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index()
    {
        $especialidades = Especialidades::all();
        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required']);
        Especialidades::create($request->all());
        return redirect()->route('especialidades.index')->with('success', 'Especialidad creada con éxito.');
    }

    public function edit($id)
    {
        $especialidad = Especialidades::findOrFail($id);
        return view('especialidades.edit', compact('especialidad'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nombre' => 'required']);
        $especialidad = Especialidades::findOrFail($id);
        $especialidad->update($request->all());
        return redirect()->route('especialidades.index')->with('success', 'Especialidad actualizada con éxito.');
    }

    public function destroy($id)
    {
        Especialidades::destroy($id);
        return redirect()->route('especialidades.index')->with('success', 'Especialidad eliminada con éxito.');
    }
}
