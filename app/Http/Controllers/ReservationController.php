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

    public function store(Request $request)
    {
        // $request->validate([
        //     'quntite' => 'required|integer|min:0',
        // ]);
        $Quntite = $request->quntite;
        $id = $request->event_id;
        $user = Auth::id();
        $event = Event::findOrFail($id);


        // $client = Reservation::where('user_id', $user)->where('event_id', $event->id)->first();
        // dd($client);
        // if ($client) {

        //     return redirect()->back()->with('error', "Déjà réservé");
        // } else {
        if ($event->number_places >= $Quntite && $Quntite>0 ) {
            if ($event->status == "auto") {
                for ($i = 0; $i < $Quntite; $i++) {
                    $reserve = Reservation::create([
                        'event_id' => $id,
                        'user_id' => $user,
                        'accepted' => true,
                        // 'quntite'=>$Quntite
                    ]);


                    if ($reserve->accepted == true) {
                        if ($event) {
                            $event->number_places--;
                            $event->update();
                        }
                    }
                    $reservationData[] = $reserve;
                }

            } else {
                for ($i = 0; $i < $Quntite; $i++) {

                    $reserve = Reservation::create([
                        'event_id' => $id,
                        'user_id' => $user,
                        'accepted' => false
                    ]);
                    $reservationData[] = $reserve;
                }
                return redirect()->back()->with('success', "Rservation en place on a attend  ");

            }
            // dd($reservationData);
            $subject = 'Ticket Reservation';
            $body = 'Evento ';

            //  $reservationData = Reservation::with('user', 'event')->where('user_id', $user)->where('event_id',$id)->first();
            $users = Auth::user();
            Mail::to($users->email)->send(new TikerMail($subject, $body, $reservationData));

            return redirect()->back()->with('success', "Rservation on a Accepte");

        }
        return redirect()->back()->with('error', "Rservation on a Refuser");






        // }



    }

 //affiche ticket pour page Dashbord client
    public function show(Reservation $reservation)
    { //
        // $user=Auth::user();

        $subject = 'Ticket';
        $body = 'Evento ';
        $reservationData = Reservation::with('user', 'event')->where('id', $reservation->id)->get();

        return view('email', compact('subject', 'body', 'reservationData'));

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