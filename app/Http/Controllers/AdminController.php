<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {

        $categorie = Categorie::count();
        $reservation = Reservation::count();
        // $roles = Role::whereIn('name', ['client', 'organisateur'])->get();
        // $roles = Role::whereIn('name', ['client'])->get();
        $users = User::where('role', '2')->orWhere('role', '3')->get();
        // $users = User::whereHas('roles', function ($query) use ($roles) {
        //     $query->whereIn('name', $roles->pluck('name'));
        // })->get();

        $events = Event::with('user', 'categorie')->where('validated', '=', 0)->get();
        $Allevents = Event::count();

        return view('admin.index', compact('categorie', 'users', 'events', 'Allevents', 'reservation'));

    }
    public function givePermission()
    {
        $Rappelluser = User::where('ascked_permission', '=', true)->doesntHave('permissions', 'and', function ($requete) {
            $requete->where('name', 'organise');
        })->get();
        $refuserUsers = User::where('ascked_permission', true)
            ->whereHas('permissions', function ($query) {
                $query->where('name', 'organise');
            })->get();


        return view('admin.premission', compact('Rappelluser', 'refuserUsers'));

    }
    public function updatepermsioon(User $user)
    {
        $user->givePermissionTo('organise');
        return redirect()->back();
    }
    public function RefuserPission(User $user)
    {
        $user->ascked_permission = false;
        $user->update();
        $user->revokePermissionTo('organise');
        return redirect()->back();
    }
    public function acceptevent(Event $event)
    {

        $event->validated = 1;
        $event->update();
        //    dd( $event->validated);
        return redirect()->back()->with('success', 'Event Accepte avec succès!');
    }
    public function refuseruser(User $user)
    {
        $user->status = 0;
        if ($user->hasRole('client')) {
            $user->removeRole('client');
        } else {
            $user->removeRole('organisateur');
        }



        $user->update();
        return redirect()->back()->with('success', 'User Refuser Acces compte  avec succès!');

    }
    public function accepteuser(User $user)
    {
        $user->status = 1;
        if ($user->role == 3) {
            $user->assignRole('client');
        } elseif ($user->role == 2) {
            $user->assignRole('organisateur');
        }


        $user->update();
        return redirect()->back()->with('success', 'User Accepte Acces compte  avec succès!');
    }
}