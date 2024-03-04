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
        $user = User::where('id', Auth::id())->first();
        if ($user->HasRole('client')) {
            return redirect()->intended(RouteServiceProvider::CLIENT);

         } else if($user->HasRole('organisateur')) {
            return redirect()->intended(RouteServiceProvider::ORGANISE);
         }else
         {
            return redirect()->intended(RouteServiceProvider::HOME);
         }
    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
