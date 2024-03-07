<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Mail\TikerMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->event_id;
        $user = Auth::id();
        $event = Event::findOrFail($id);


        $client = Reservation::where('user_id', $user)->where('event_id', $event->id)->first();
        // dd($client);
        if ($client) {

            return redirect()->back()->with('error', "Déjà réservé");
        } else {

            if ($event->status == "auto") {

                $reserve = Reservation::create([
                    'event_id' => $id,
                    'user_id' => $user,
                    'accepted' => true
                ]);


                if ($reserve->accepted == true) {
                    if ($event) {
                        $event->number_places--;
                        $event->update();
                    }
                }

                $subject = 'Ticket';
                $body = 'Evento ';
                $reservationData = Reservation::with('user', 'event')->where('user_id', $user)->first();
                $users = Auth::user();
                // dd($reservationData);
                //    return view('email',compact('user','subject', 'body','reservationData'));
                Mail::to($users->email)->send(new TikerMail($subject, $body, $reservationData));
                // Mail::to($users->email)->send(new TikerMail($subject, $body,$reservationData));


             return redirect()->back()->with('success', "Rservation on a Accepte");

            } else {
                $reserve = Reservation::create([
                    'event_id' => $id,
                    'user_id' => $user,
                    'accepted' => false
                ]);
                return redirect()->back()->with('success', "Rservation en place on a attend  ");

            }
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)  {
    // $user=Auth::user();

       $subject = 'Ticket';
       $body = 'Evento ';
       $reservationData=Reservation::with('user','event')->where('id',$reservation->id)->first();

         return view('email',compact('subject', 'body','reservationData'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}