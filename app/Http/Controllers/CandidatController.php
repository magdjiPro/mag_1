<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidats = Candidat::all();
        return view('candidat.list',compact('candidats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('candidat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //dd($request->all());
        $canditat = new Candidat();
        $canditat->nom = $request->nom;
        $canditat->prenom = $request->prenom;
        $canditat->dateNaissance = $request->dateNaissance;
        $canditat->parti = $request->parti;

        if(!empty($request->file('photo_profile')))
        {
            $file = $request->file('photo_profile');

            // $ext = $request->file('profile_pic')->getClientOriginalExtension();
            // $randomStr = Str::random(20);
            // $fileName = strtolower($randomStr).'.'.$ext;
            // $student->profile_pic = $fileName;

            $path = $file->store('upload/profile', 'public');
            $canditat->photo_profile = $path;
        }
        
        /*l'image
        $image = $request->file('photo_profile');

        // Générez un nom de fichier unique.
        $imageName = time() . '_' . $image->getClientOriginalName();
        // Stockez l'image dans le disque configuré dans votre configuration filesystems.php.
        $image->storeAs('images', $imageName, 'images');
        // Vous pouvez également enregistrer le chemin de l'image dans une base de données si nécessaire.
        // Exemple : Image::create(['path' => 'images/' . $imageName]);
        $canditat->photo_profile = $request->photo_profile
        */

        $canditat->save();
        return redirect()->back()->with('success', 'Candidat ajouter avec success');
    }

    /**
     * Display the specified resource.->recherche d'un seul element
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
        $candidat = Candidat::find($id);
        return view('candidat.update', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $candidat = Candidat::find($id);
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->dateNaissance = $request->dateNaissance;
        $candidat->parti = $request->parti;
        if(!empty($request->file('photo_profile')))
        {
            $file = $request->file('photo_profile');
            $path = $file->store('upload/profile', 'public');
            $candidat->photo_profile = $path;
        }
        $candidat->save();

        return redirect(url('list/candidat'))->with('info','Candidat successfully update');
    }

    public function delete(string $id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();

        return redirect()->back()->with('danger','Candidat successfully deleted');
    }

    // Téléchargement des données
    public function candidatPDF()
    {
        $liste = Candidat::all();
        $data = [
            'users'=>$liste
        ];

        $pdf = Pdf::loadView('candidat.candidatPDF', compact('data') );

        return $pdf->download('listeCandidat.pdf');

    }
}
