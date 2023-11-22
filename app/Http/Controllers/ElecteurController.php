<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electeurs = Electeur::all();
        // il faut que je fasses la jointure entre ses deux tables('Electeur & Candidat')
        $candidat = Candidat::find($electeur->candidat_id);
        return view('electeur.list', compact('electeurs', 'candidat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidats = Candidat::all();
        return view('electeur.ajout', compact('candidats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $electeur = new Electeur();
        $electeur->prenom = $request->prenom;
        $electeur->nom = $request->nom;
        $electeur->cni = $request->cni;
        $electeur->candidat_id = $request->candidat;
        $electeur->save();

        return redirect()->back()->with('success', 'Vote valider avec success');
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
        $electeurs = Electeur::find($id);
        $candidats = Candidat::find($electeurs->candidat_id);
        return view('electeur.edit', compact('electeurs','candidats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $electeur = Electeur::find($id);
        $electeur->prenom = $request->prenom;
        $electeur->nom = $request->nom;
        $electeur->cni = $request->cni;
        $electeur->candidat_id = $request->candidat;
        $electeur->update();

        return redirect()->back()->with('success', 'Modification de votre Vote valider avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $electeur = Electeur::find($id);
        $electeur->delete();

        return redirect()->back()->with('danger','electeur successfully deleted');
    }
}
