<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ClientController extends Controller
{
    public function index(){

        return view('client.index');
    }
    public function askpermession(User $user){
        $user->ascked_permission=true;
        $user->update();
        return redirect(RouteServiceProvider::CLIENT);
    }
}