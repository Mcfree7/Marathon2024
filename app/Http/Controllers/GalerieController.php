<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galerie::with('images')->latest()->take(30)->paginate(5);
            
            
        // Créer un tableau pour stocker les premières images de chaque article
        $firstImages = [];

        // Pour chaque article, récupérer sa première image (s'il en a)
        foreach ($galeries as $galerie) {
            $firstImage = $galerie->images->first();
            // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
            $firstImages[] = $firstImage;
        }
        return view('admin.galerie.index',compact('galeries','firstImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galerie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
        ]);

        $galerie = new Galerie();
        $galerie->Titre = $request->titre;
        $galerie->Contenu = $request->contenu;
        $galerie->Date = $request->date;
        $galerie->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path=time().'.'.$image->extension();
                $image->move(public_path('galerie_images'), $path);
                $galerie->images()->create(['path' => $path]);
            }
        }
        return redirect()->route('galerie.index')->withSuccess('galerie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galerie $galerie)
    {
        $galerie->load('images');

        // Obtenir les 5 articles les plus récents avec leurs images
        $gal = Galerie::with('images')->latest()->take(5)->get();
        
        // Créer un tableau pour stocker les premières images de chaque article
        $firstImages = [];
    
        // Pour chaque article, récupérer sa première image (s'il en a)
        foreach ($gal as $a) {
            $firstImage = $a->images->first();
            // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
            $firstImages[] = $firstImage;
        }
    
        return view('pages.galeries.show', compact('galerie', 'gal', 'firstImages'));
    }

    //pour l'affichage des details de la galerie
    public function detail(Galerie $galerie)
{
    $galerie->load('images');

    // Obtenir les 5 articles les plus récents avec leurs images
    $gal = Galerie::with('images')->latest()->take(5)->get();
    
    // Créer un tableau pour stocker les premières images de chaque article
    $firstImages = [];

    // Pour chaque article, récupérer sa première image (s'il en a)
    foreach ($gal as $a) {
        $firstImage = $a->images->first();
        // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
        $firstImages[] = $firstImage;
    }

    return view('pages.galeries.show', compact('galerie', 'gal', 'firstImages'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galerie $galerie)
    {
        $galerie = Galerie::where('id',$galerie->id)->first();
        return view('admin.galerie.edit',compact('galerie')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galerie $galerie)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
        ]);
        $galerie = Galerie::where('id',$galerie->id)->first();
        $galerie->Titre = $request->titre;
        $galerie->Contenu = $request->contenu;
        $galerie->Date = $request->date;
        $galerie->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path=time().'.'.$image->extension();
                $image->move(public_path('galerie_images'), $path);
                $galerie->images()->create(['path' => $path]);
            }
        }
        return redirect()->route('galerie.index')->withSuccess('galerie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galerie $galerie)
    {
        
        $galerie = Galerie::where('id',$galerie->id)->first();
        $galerie->delete();
        return redirect()->route('galerie.index')->withSuccess('galerie Supprimée avec succès');//
    }

    public function affiche(){
        $galerie = Galerie::with('images')->latest()->take(30)->paginate(6);
            
        // Créer un tableau pour stocker les premières images de chaque article
        $firstImages = [];

        // Pour chaque article, récupérer sa première image (s'il en a)
        foreach ($galerie as $gal) {
            $firstImage = $gal->images->first();
            // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
            $firstImages[] = $firstImage;
        }
        return view('pages.galeries.allimages',compact('galerie','firstImages'));
        }
}
