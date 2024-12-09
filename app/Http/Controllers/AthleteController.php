<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Event;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.adminDashboard',['events'=>$events]);
    }

    public function create()
    {
        return view('admin.addAthlete');
    }
}
