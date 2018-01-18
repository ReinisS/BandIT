<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Band;
use App\User_band;
use App\Manager;
use App\Band_event;
use App\Event;
use App\Attendance;
use App\Comment;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth')->only(['create','store','edit','attendance','updateattendance']);
        
    }
    
    public function index()
    {
        
        return view('band', array('title' => 'Bands', 'bands' => Band::orderBy('id')->get()));
        
    }
    
    public function create()
    {
        
        if (!Auth::guest()) {
            
        }
        $users = User::all()->toArray();
        return view('band_create', array('users' => $users));
        
    }
    
    public function store(Request $request)
    {
        
        $data = $request->all();
        if(!isset($data['user'])) { $data['user'] = []; }
        if(!isset($data['manager'])) { $data['manager'] = []; }
        
        $rules = $rules = array(
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'privateinfo' => 'required|min:3',
            'manager' => 'required'
        );
        
        $this->validate($request, $rules);
        
        foreach ($data['manager'] as $m) {
            if (!in_array($m, $data['user'])) {
                array_push($data['user'], $m);
            }
        }
        if (!in_array(Auth::user()->id, $data['user'])) {
            array_push($data['user'], Auth::user()->id);
        }
        
        $band = new Band();

        $band->name = $data['name'];
        $band->description = $data['description'];
        $band->privateinfo = $data['privateinfo'];

        $band->save();
        
        foreach ($data['manager'] as $m) {
            $manager = new Manager();
            $manager->user_id = $m;
            $manager->band_id = $band->id;
            $manager->save();
        }
        
        foreach ($data['user'] as $u) {
            $user_band = new User_band();
            $user_band->user_id = $u;
            $user_band->band_id = $band->id;
            $user_band->save();
        }
        
        return redirect()->action('BandController@show', array($band->id));
        
    }
    
    public function edit($id)
    {
        
        if (!Auth::guest() && (Auth::user()->isAdmin() ||
            Manager::where('user_id', '=', Auth::user()->id)->where('band_id', '=', $id)->count() > 0)) {
            return view('band_edit', array('band' => Band::findOrFail($id), 'users' => User::all()->toArray()));
        }
        else { return redirect('home')->withErrors('Access denied - you do not have permission to edit this band!'); }
        
    }
    
    public function show($id)
    {
        
        $band = Band::findOrFail($id);
        
        if (!Auth::guest() && (Auth::user()->isAdmin() ||
            User_band::where('user_id', '=', Auth::user()->id)->where('band_id', '=', $band->id)->count() > 0)) {
            $showprivate = true;
        }
        else { $showprivate = false; }
        
        if (!Auth::guest() && (Auth::user()->isAdmin() ||
            User_band::where('user_id', '=', Auth::user()->id)->where('band_id', '=', $band->id)->count() > 0)) {
            $canedit = true;
        }
        else { $canedit = false; }
        
        $band_events = Band_event::where('band_id', '=', $band->id)->get()->toArray();
        $eventIDs = [];
        foreach ($band_events as $e) {
            array_push($eventIDs, $e['event_id']);
        }
        $events = Event::whereIn('id', $eventIDs)->get();
        
        return view('band_show', array('band' => $band, 'showprivate' => $showprivate, 'events' => $events));
        
    }
    
    public function attendance($band_id, $event_id)
    {
        
        $band = Band::findOrFail($band_id);
        $event = Event::findOrFail($event_id);
        $attendances = Attendance::where('band_id', '=', $band_id)->where('event_id', '=', $event->id)->get()->toArray();
        $editedattendances = [];
        foreach ($attendances as $a) {  // 0 - unknown, 1 - attending, 2 - maybe attending, 3- not attending
            $a['user_name'] = User::findOrFail($a['user_id'])->name;
            array_push($editedattendances, $a);
        }
        
        return view('band_event_attendance_show', array('band' => $band, 'event' => $event, 'attendances' => $editedattendances));
        
    }
    
    public function updateattendance(Request $request, $band_id, $event_id)
    {
        
        $data = $request->all();
        $attendance = Attendance::where('user_id', '=', Auth::user()->id)
                ->where('band_id', '=', $band_id)
                ->where('event_id', '=', $event_id)
                ->get()->first();
        $attendance->attendance = $data['attendance'][0];
        $attendance->save();
        
        return redirect()->action('BandController@attendance', array($band_id, $event_id))->with('message', 'Attendance updated!');
        
    }
    
}
