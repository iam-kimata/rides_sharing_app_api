<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // for displaying login page
    public function login()
    {
        return view('login');
    }

    // for displaying dashboard page
    public function dashboard()
    {
        return view('dashboard');
    }

    // for displaying dashboard page
    public function students()
    {
        return view('students');
    }

    // for displaying drivers page
    public function drivers()
    {
        return view('drivers');
    }

    // for displaying routes page
    public function trips()
    {
        return view('trips');
    }

    // for displaying edit trip page
    public function editTrip()
    {
        return view('edit_trip');
    }
}
