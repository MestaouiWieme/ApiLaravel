<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

{
      $users = Utilisateur::all();
      return response()->json($users);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
           
        ]);
    
        $user = Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            
        ]);
       
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);

        return response()->json($utilisateur, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $user)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
           
        ]);
    
        // On modifie les informations de l'utilisateur
    
        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $user)
    {
        $user->delete();
        return response()->json();
    }
}
