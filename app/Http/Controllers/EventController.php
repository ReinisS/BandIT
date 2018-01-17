<?php

namespace App\Http\Controllers;

use Auth;
use App\Event;
use App\Band;
use App\User;
use App\User_event;
use App\User_band;
use App\Band_event;
use App\Comment;
use App\Attendance;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function __construct() {
        
        $this->middleware('auth')->only(['create','store','comment']);
        
    }
    
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
            
            $band_events = Band_event::where('event_id', '=', $id)->get()->toArray();
            $bandIDs = [];
            foreach ($band_events as $b) {
                array_push($bandIDs, $b['band_id']);
            }
            $bands = Band::whereIn('id', $bandIDs)->get();
            
            $comments = Comment::where('event_id', '=', $id)->get()->toArray();
            $editedcomments = [];
            foreach ($comments as $c) {
                $c['user_name'] = User::findOrFail($c['user_id'])->name;
                array_push($editedcomments, $c);
            }
            return view('event_show', array('event' => $event, 'bands' => $bands, 'comments' => $editedcomments));
        }
        else { return redirect('home')->withErrors('Access denied to requested event!'); }
        
    }
    
    public function create()
    {
        
        if (!Auth::guest()) {
            
        }
        $bands = Band::all()->toArray();
        return view('event_create', array('bands' => $bands));
        
    }
    
    public function store(Request $request)
    {
        
        $data = $request->all();
        if(!isset($data['band'])) { $data['band'] = []; }
        if(!isset($data['public'])) { $data['public'] = 0; }
        
        $rules = $rules = array(
            'name' => 'required|min:3',
            'date' => 'required|date',
            'place' => 'required|min:3',
            'description' => 'required|min:3',
            'band' => 'required'
        );
        
        $this->validate($request, $rules);
        
        $event = new Event();

        $event->name = $data['name'];
        $event->date = $data['date'];
        $event->place = $data['place'];
        $event->description = $data['description'];
        $event->public = $data['public'];

        $event->save();
        
        foreach ($data['band'] as $b) {
            $band_event = new Band_event();
            $band_event->band_id = $b;
            $band_event->event_id = $event->id;
            $band_event->save();
            
            $band_users = User_band::where('band_id', '=', $b)->get()->toArray();
            foreach ($band_users as $u) {
                $attendance = new Attendance();
                $attendance->user_id = $u['user_id'];
                $attendance->band_id = $u['band_id'];
                $attendance->event_id = $event->id;
                $attendance->attendance = 0;
                $attendance->save();
            } 
        }
        
        return redirect()->action('EventController@show', array($event->id));
        
    }
    
    public function comment($id, Request $request)
    {
        
        $data = $request->all();
        
        $rules = $rules = array(
            'content' => 'required|min:3'
        );
        
        $this->validate($request, $rules);
        
        $comment = new Comment();
        
        $comment->user_id = Auth::user()->id;
        $comment->event_id = $id;
        $comment->content = $data['content'];
        $comment->save();

        return redirect()->action('EventController@show', array($id));
        
    }
    
}
