<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionals = Professional::all();
        $route = 'storage/img_professional/';
        return view('about')->with('professionals', $professionals)->with('route', $route);
    }

    /**
     * Display the specified resource.
     */
    public function show(Professional $professional)
    {
        $route = 'storage/img_professional/';
        return view('professional')->with('professional', $professional)->with('route', $route);
    }
}
