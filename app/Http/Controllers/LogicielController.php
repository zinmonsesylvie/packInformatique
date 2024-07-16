<?php

namespace App\Http\Controllers;

use App\Models\Logiciel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogicielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logiciels = Logiciel::all();
        return view('logicielall', compact('logiciels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('logiciel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string',
            'licence' => 'required|string',
            'version' => 'required|string',
            'editeur' => 'required|string',
            'date_achat_licence' => 'required|integer',
            'date_expiration' => 'required|integer',
        ]);

        $logiciel = New Logiciel();
        $logiciel->libelle = $request->libelle;
        $logiciel->licence = $request->licence;
        $logiciel->version = $request->version;
        $logiciel->editeur = $request->editeur;
        $logiciel->date_achat_licence = $request->date_achat_licence;
        $logiciel->date_expiration = $request->date_expiration;
        $logiciel->save();
        return view('home');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
