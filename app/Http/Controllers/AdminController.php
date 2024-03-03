<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categorie=Categorie::count();

        return view('admin.index',compact('categorie'));

    }
    public function givePermission(){
        $Rappelluser=User::where('ascked_permission','=',true)->doesntHave('permissions','and',function($requete){
            $requete->where('name','organise');
        })->get();
        $refuserUsers = User::where('ascked_permission', true)
        ->whereHas('permissions', function ($query) {
            $query->where('name', 'organise');
        })->get();


        return view('admin.premission',compact('Rappelluser','refuserUsers'));

    }
    public function updatepermsioon(User $user){
        $user->givePermissionTo('organise');
        return redirect()->back();
    }
    public function RefuserPission(User $user){
        $user->ascked_permission=false;
        $user->update();
        return redirect()->back();
    }
}