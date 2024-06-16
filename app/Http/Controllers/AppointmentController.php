<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = User::find(Auth::id())->appointments;

        $actualTime = Carbon::now()->format('H:i');
        $tomorrowDate = Carbon::tomorrow()->format('d/m/Y');

        foreach ($appointments as $appointment) {
            $appointment->date = Carbon::parse($appointment->date)->format('d/m/Y');
            $appointment->time = Carbon::parse($appointment->time)->format('H:i');
        }

        return view('appointment.index')->with('appointments', $appointments)->with('actualTime', $actualTime)->with('tomorrowDate', $tomorrowDate);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $appointment = new Appointment();
            $appointment->date = $request->date;
            $appointment->time = $request->time;
            if ($request->observations) {
                $appointment->observations = $request->observations;
            } else {
                $appointment->observations = "";
            }
            $appointment->user_id = Auth::id();
            $appointment->professional_id = $request->professional;

            $appointment->save();

            return to_route('appointment.index')->with('status', 'Cita solicitada correctamente');
        } catch (QueryException $e) {
            return to_route('appointment.index')->with('status', 'Se ha producido un error al intentar solicitar la cita.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        try {
            $appointment->delete();

            return to_route('appointment.index')->with('status', 'Cita cancelada correctamente.');
        } catch (QueryException $e) {
            return to_route('appointment.index')->with('status', 'Se ha producido un error al intentar cancelar la cita.');
        }
    }
}
