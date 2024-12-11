<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // public function index()
    // {
    //     $events = Event::all();
    //     return view('admin.adminDashboard',['events'=>$events]);
    // }
    public function adminDashboard()
    {
        $events = Event::paginate(10);
        return view('admin.adminDashboard', ['events' => $events]);
    }
    
    public function userDashboard()
    {
        $events = Event::paginate(10);
        return view('user.dashboard', ['events' => $events]);
    }
    

    public function create()
    {
        return view('admin.addEvent');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'event_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'place' => 'required'
        ]);

        $newEvent = Event::create([
            'name' => $data['name'],
            'place' => $data['place'],
            'event_photo' => $data['event_photo']->store('event_photos', 'public'), 
        ]);

        return redirect(route('admin.dashboard'));
    }
    public function edit(Event $event){
        return view('admin.editEvent' , compact('event'));

    }
    public function update(Event $event, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'event_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'place' => 'required'
        ]);

        if ($request->hasFile('event_photo')) {
            if ($event->event_photo) {
                Storage::delete('public/' . $event->event_photo); 
            }

            $data['event_photo'] = $request->file('event_photo')->store('event_photos', 'public');
        }

        $event->update($data);

        return redirect(route('admin.dashboard'))->with('success', 'Event updated successfully');
    }
    public function delete(Event $event){
        $event->delete();
        return redirect(route('admin.dashboard'))->with('success', 'Event deleted successfully');
    }
  
}
