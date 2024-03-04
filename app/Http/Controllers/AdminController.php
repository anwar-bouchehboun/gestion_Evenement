<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $categorie = Categorie::count();
        $roles = Role::whereIn('name', ['client', 'organisateur'])->get();

        // Récupérer les utilisateurs ayant l'un des rôles spécifiés
        $users = User::whereHas('roles', function ($query) use ($roles) {
            $query->whereIn('name', $roles->pluck('name'));
        })->get();


        return view('admin.index', compact('categorie', 'users'));

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
}