<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        $events = Event::count();
        $organisateur = User::where('role', '=', 2)->count();
        $date = now()->toDateTimeString();
        $eventaffiche = Event::with('user', 'categorie')
            ->where('number_places', '!=', 0)
            ->where('date', '>', $date)
            ->where('validated', true)
            ->paginate(6);
        return view('welcome', compact('events', 'organisateur', 'categories', 'eventaffiche'));
    }

    public function search(Request $request)
    {

        $categories = Categorie::all();
        $events = Event::count();
        $organisateur = User::where('role', '=', 2)->count();
        $searchQuery = $request->input('search');

        $date = now()->toDateTimeString();
        $eventaffiche = Event::with('user', 'categorie')
            ->where('number_places', '!=', 0)
            ->where('date', '>', $date)
            ->where('validated', true)
            ->where('title', 'like', '%' . $searchQuery . '%')
            ->paginate(1);
            // dd($eventsearch);
            return view('welcome',compact('events', 'organisateur', 'categories', 'eventaffiche'));

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}