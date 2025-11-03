<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    // lister
    public function liste_etudiant()
    {
        $lister = Etudiant::paginate(5);
        return view('etudiant.liste', compact('lister'));
    }

    // ajouter
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $var = new Etudiant();
        $var->nom = $request->nom;
        $var->prenom = $request->prenom;
        $var->classe = $request->classe;
        $var->save();

        return redirect('/')->with('status','Élément enregistré avec succès !');
    }

    // modifier
    public function modifier_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.modifier', compact('etudiants'));
    }

    public function modifier_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $var = Etudiant::find($request->id);
        $var->nom = $request->nom;
        $var->prenom = $request->prenom;
        $var->classe = $request->classe;
        $var->update();

        return redirect('/')->with('status','Informations mises à jour avec succès !');
    }

    public function supprimer_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        $etudiants->delete();

        return redirect('/')->with('status','Élément supprimé avec succès !');
    }
}
