<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categorie', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s\-\'\.\,\(\)]+$/|max:255'
        ]);

        Categorie::create([
            'name' => $request->name
        ]);

        return redirect()->route('categorie.index')->with('success', 'Spécialité ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('admin.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {


        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categorie->update([
            'name' => $request->name,
        ]);



        return redirect()->route('categorie.index')->with('success', 'categorie mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {

        $categorie->delete();

        return redirect()->route('categorie.index')->with('success', 'categorie supprimée avec succès.');
        // $categories->delete();
    }
}