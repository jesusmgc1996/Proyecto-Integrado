<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultingRoom;

class ConsultingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultingRooms = ConsultingRoom::all();
        $route = 'images/img_facilities/';
        return view('facilities')->with('consultingRooms', $consultingRooms)->with('route', $route);
    }
}
