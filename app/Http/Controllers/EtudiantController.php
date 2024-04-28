<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //

    public function list_etudiant(){
        $etudiants = Etudiant::paginate(5);
        return view('etudiant.list')->with('etudiants', $etudiants);
    }

    public function ajouter_etudiant(){
        return view('etudiant.create');
    }

    public function ajouter_etudiant_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'classe' =>'required',
            'email' =>'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect('/create')->with('status', 'Etudiant ajouté avec succes');
    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        
        return view('etudiant.update')->with('etudiants', $etudiants);
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'classe' =>'required',
            'email' =>'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->email = $request->email;
        $etudiant->update();

        return redirect('/list')->with('status', 'Etudiant modifié avec succes');
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/list')->with('status', 'Etudiant supprimé avec succes');
    }
}
