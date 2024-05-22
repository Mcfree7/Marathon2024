<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.inscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'nationalite' => 'required',
            'genre' => 'required',
            'categorie' => 'required',
            'phone' => 'required',
            'passeport' => 'required|mimes:jpeg,jpg,png,pdf|max:4000',            
            'photo'=> 'required|mimes:jpeg,jpg,png|max:4000'
        ]);
        //upload id_photo
        $imageName=$request->nom.'_'.$request->prenom.'.'.$request->photo->extension();
        $request->photo->move(public_path('idphoto'), $imageName);
        //upload passport
        $fileName= $request->nom.'_'.$request->prenom.'.'.$request->passeport->extension();
        $request->passeport->move(public_path('passeport'),$fileName);


        $inscrit = new Inscription();
        $inscrit->Nom= $request->nom;
        $inscrit->Prenom= $request->prenom;
        $inscrit->Email= $request->email;
        $inscrit->Telephone= $request->phone;
        $inscrit->Nationalite= $request->nationalite;
        $inscrit->Genre= $request->genre;
        $inscrit->Categorie= $request->categorie;
        $inscrit->Photo= $imageName;
        $inscrit->Passport= $fileName;

        $inscrit->save();
        return back()->withSuccess('inscription effectuer avec succès, Bonne chance!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
