<?php
namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Muestra todas las actividades.
     */
    public function index()
    {
        $activities = Activity::all();
       return view('activities.index', compact('activities')); //esto con la vista
        //return Activity::all();
      // return "¡Hola desde ActivityController!";
    }

    /**
     * Muestra el formulario para crear una nueva actividad.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Guarda una nueva actividad en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Activity::create($request->all());

        return redirect()->route('activities.index')->with('success', 'Actividad creada correctamente');
    }

    /**
     * Muestra una actividad específica.
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Muestra el formulario para editar una actividad.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Actualiza una actividad en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update($request->all());

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada correctamente');
    }

    /**
     * Elimina una actividad.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Actividad eliminada correctamente');
    }
}
