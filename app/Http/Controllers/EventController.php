<?php

namespace App\Http\Controllers;

use Auth;
use App\Event;
use App\User;
use App\User_event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('public_events', array('title' => 'Public Events', 'p_events' => Event::orderBy('date')->where('public', '1')->get()));
    }
    
    public function show($id)
    {
        $event = Event::findOrFail($id);
        if ($event->public === 1 ||
                Auth::user()->isAdmin() ||
                User_event::where('user_id', '=', Auth::user()->id)->count() > 0)
        {
            return view('show_event', array('event' => $event));
        }
        else { return redirect('home')->withErrors('Access denied to requested event!'); }
        
    }
}
