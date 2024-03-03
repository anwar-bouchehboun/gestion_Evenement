<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categorie=Categorie::count();

        return view('admin.index',compact('categorie'));

    }
}