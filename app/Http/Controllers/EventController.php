<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Organizer;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     */

 public function event_menu()
    {

    // Ambil semua event dari database, sertakan data organizer dan kategori
    $events = Event::with('organizer', 'eventCategory')->get();

    // Tampilkan view menu.blade.php dengan data events
    return view('event_menu', compact('events'));
    }
    public function index()
    {
        // Fetch all events and eager load related organizer and eventCategory
        $events = Event::with('organizer', 'eventCategory')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        $organizers = Organizer::all(); // Fetch all organizers for the form
        $eventCategories = EventCategory::all();
        return view('events.create', compact('organizers', 'eventCategories'));
    }

    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'event_datetime' => 'required|date_format:Y-m-d\TH:i', // pastikan format sesuai dengan input
            'organizer_id' => 'required|exists:organizers,id',
            'description' => 'nullable|string',
            'tags' => 'nullable|string',
        ]);
    
        // Pisahkan event_datetime menjadi date dan start_time
        $datetime = explode('T', $request->input('event_datetime'));
        $date = $datetime[0];
        $start_time = $datetime[1];
    
        // Simpan event ke database
        Event::create([
            'title' => $request->input('title'),
            'venue' => $request->input('venue'),
            'date' => $date,
            'start_time' => $start_time,
            'organizer_id' => $request->input('organizer_id'),
            'description' => $request->input('description'),
            'tags' => $request->input('tags'),
        ]);
    
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }
    

    /**
     * Show the details of a specific event.
     */
    public function show($id)
    {
        $event = Event::with('organizer', 'eventCategory')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified event.
     */
    public function edit(Event $event)
    {
        // $event = Event::findOrFail($id);
        // $organizers = Organizer::all(); // Fetch all organizers for the form
        // return view('events.updateEvent', compact('event', 'organizers'));

        $organizers = Organizer::all(); // Ambil semua organizer
        $eventCategories = EventCategory::all(); // Ambil semua kategori event
        return view('events.create', compact('event', 'organizers', 'eventCategories'));
    }

    /**
     * Update the specified event in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'venue' => 'required|string|max:255',
        'event_datetime' => 'required|date_format:Y-m-d\TH:i', // pastikan format sesuai dengan input
        'organizer_id' => 'required|exists:organizers,id',
        'description' => 'nullable|string',
        'tags' => 'nullable|string',
    ]);

    // Pisahkan event_datetime menjadi date dan start_time
    $datetime = explode('T', $request->input('event_datetime'));
    $date = $datetime[0];
    $start_time = $datetime[1];

    // Temukan event berdasarkan ID dan perbarui data
    $event = Event::findOrFail($id);
    $event->update([
        'title' => $request->input('title'),
        'venue' => $request->input('venue'),
        'date' => $date,
        'start_time' => $start_time,
        'organizer_id' => $request->input('organizer_id'),
        'description' => $request->input('description'),
        'tags' => $request->input('tags'),
    ]);

    return redirect()->route('events.index')->with('success', 'Event updated successfully.');
}

    /**
     * Remove the specified event from storage.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
