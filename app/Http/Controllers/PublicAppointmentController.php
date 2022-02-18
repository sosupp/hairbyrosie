<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicAppointmentController extends Controller
{
    public function index()
    {
        return view('frontend.booking.index');
    }
}
