<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ClientController extends Controller
{
    public function index()
    {
      
        $reservations = Reservation::with(['user', 'event'])
        ->where('user_id', Auth::id())
        ->get();

        return view('client.index', compact('reservations'));
    }

    public function askpermession(User $user)
    {
        $user->ascked_permission = true;
        $user->update();
        return redirect(RouteServiceProvider::CLIENT);
    }
    public function show(Event $event){
        $events = Event::findOrFail($event->id);
        if($event->number_places>0){
            return view('client.show',compact('events'));
        }
        else{
          abort(404);
        }
    }
}