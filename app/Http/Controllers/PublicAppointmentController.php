<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class PublicAppointmentController extends Controller
{
    public function index()
    {

        return view('frontend.booking.index');
    }

    public function create()
    {
        $event = new Event();

        $event->quickSave('Appointment at Somewhere on April 25 10am-10:25am');
        // $event = new Event;

        // $event->name = 'A new event';
        // $event->startDateTime = Carbon::now();
        // $event->endDateTime = Carbon::now()->addHour();

        // $event->save();
    }
}
