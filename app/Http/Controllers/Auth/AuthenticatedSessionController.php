<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{

    public function create(): View
    {
        return view('auth.login');
    }


    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = User::find(Auth::id());

        if ($user->hasRole('client')) {
            return redirect()->intended(RouteServiceProvider::CLIENT);
        } elseif ($user->hasRole('organisateur')) {
            return redirect()->intended(RouteServiceProvider::ORGANISE);
        } elseif ($user->hasRole('admin')) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return redirect()->back();
    }



    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}