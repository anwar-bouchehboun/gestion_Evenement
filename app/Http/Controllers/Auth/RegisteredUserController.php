<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Role::whereIn('name', ['client', 'organisateur'])->get();

        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        if ($user->role == 3) {
            $user->assignRole('client');
        } elseif ($user->role == 2) {
            $user->assignRole('organisateur');
        }

        Auth::login($user);
        if ($user->HasRole('client')) {
            return redirect()->intended(RouteServiceProvider::CLIENT);

        } else if ($user->HasRole('organisateur')) {
            return redirect()->intended(RouteServiceProvider::ORGANISE);
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }



        // return redirect(RouteServiceProvider::HOME);
    }
}