<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('user', 'categorie')->where('user_id', Auth::id())->get();

        return view('organisateur.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('organisateur.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'required',
            'number_places' => 'required|integer',
            'categories_id' => 'required|exists:categories,id',
            'status' => 'required|in:manuel,auto',
        ]);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('EventsImg', 'public');
        } else {
            $validated['image'] = $request->input('image');
        }
        $date_requested = new DateTime($request->date);
        $date_today = new DateTime();
        if ($date_requested > $date_today) {
            $new_date = $date_requested;
        } else {
            return redirect()->back()->with('Error', 'Event Error avec succès.');
            ;


        }
        $user = Auth::id();
        $event = Event::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'date' => $new_date,
                'location' => $request->location,
                'image' => $validated['image'],
                'number_places' => $request->number_places,
                'categories_id' => $request->categories_id,
                'status' => $request->status,
                'user_id' => $user,

            ]
        );

        return redirect()->back()->with('success', 'Event Add avec succès.');
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('Event.index')->with('success', 'Event supprimée avec succès.');

    }
}