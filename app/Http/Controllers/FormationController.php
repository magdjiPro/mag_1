<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('formation.list', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formation.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formations = new Formation();
        $formations->nom = $request->nom;
        $formations->prenom = $request->prenom;
        $formations->phone = $request->phone;
        $formations->participation = $request->participation;
        $formations->save();

        return redirect()->back()->with('success', 'Participant ajouter avec success');
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
        $formations = Formation::find($id);
        return view('formation.edit', compact('formations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formations = Formation::find($id);
        $formations->nom = $request->nom;
        $formations->prenom = $request->prenom;
        $formations->phone = $request->phone;
        $formations->participation = $request->participation;
        $formations->save();

        return redirect()->back()->with('success', 'Participant modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function listPDF(){
        $liste = Formation::all();
        $data = [
            
            'users' => $liste   
        ];
        
        // return view("formation.listParticipant", compact('data'));
        $pdf = Pdf::loadView('formation.listParticipant',  compact('data') );
        
        return $pdf->download('test.pdf');
    }
}
