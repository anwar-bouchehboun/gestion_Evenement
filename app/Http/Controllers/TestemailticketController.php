<?php

namespace App\Http\Controllers;

use App\Mail\TikerMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TestemailticketController extends Controller
{
    public function index()
    {
    //    $user = Auth::user();

    //    $subject = 'Ticket';
    //    $body = 'Evento ';
    //    $reservationData=Reservation::with('user','event')->first();
    // //    dd($reservationData);

    //    return view('email',compact('user','subject', 'body','reservationData'));
    //    Mail::to($user->email)->send(new TikerMail($subject, $body,$reservationData));
}
}