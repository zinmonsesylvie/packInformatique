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
        $data = Logiciel::all();
        return response()->json($data,200);
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
            'libelle' => 'required|string|255',
            'licence' => 'required|string',
            'version' => 'required|string',
            'editeur' => 'required|string',
            'date_achat_licence' => 'required|date',
            'date_expiration' => 'required|date',
        ]);

        Logiciel::create([
            'libelle' => $request->libelle,
            'licence' => $request->licence,
            'version' => $request->version,
            'editeur' => $request->editeur,
            'date_achat_licence' => $request->date_achat_licence,
            'date_expiration' => $request->date_expiration,
        ]);
        return response()->json('logiciel enregistré avec succès', 200);

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
