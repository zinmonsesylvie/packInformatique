<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('userall', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('auth.register');
    }

    public function showRegistrationForm() {
        $services = Service::all();
        return view('auth.register', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */

     //Enregistrement d'un utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'fonction' => 'required|string|max:255',
            'service_id' => 'required|integer',
        ]);

        // Création d'un nouvel utilisateur
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'fonction' => $request->fonction,
            'service_id' => $request->service_id,
        ]);

        // Redirection avec un message de succès
        return redirect('/login')->with('success', 'Utilisateur créé avec succès!');

    }


    //affichage de la page login
    public function createlogin():view
    {
        return view('auth.login');
    }


// connexion d'un utilisateur
    public function login(Request $request)
{
    // Validation des champs du formulaire
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Récupération des informations d'identification
    $credentials = $request->only('email', 'password');

    // Tentative d'authentification
    if (Auth::attempt($credentials)) {
        // Récupération de l'utilisateur authentifié
        $user = Auth::user();
        // Création du token
        $token = $user->createToken('authToken')->plainTextToken;
        // Redirection vers la page d'accueil avec un message de succès
        return view('dashboard');
    } else {
        return response()->json(["message" => "Identifiants incorrects"], 401);
    }
}

//fonction de déconnexion d'un utilisateur
   public function logout(Request $request)
{
    // Révoquer le token de l'utilisateur
    $request->user()->tokens()->delete();
    //Retourner une réponse JSON confirmant la déconnexion
    return view('auth.login');
}


public function userconnecter()
{
    $user = Auth::user(); 
    return view('partials.navbar', compact('user'));
}

public function showProfile()
{
    $user = Auth::user();
    return view('partials.navbar', ['user' => $user]);
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
