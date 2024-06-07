<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Galerie;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function index(){
    $articles = Article::with('images')->latest()->take(6)->get();
    // Créer un tableau pour stocker les premières images de chaque article
    $firstImages = [];

    // Pour chaque article, récupérer sa première image (s'il en a)
    foreach ($articles as $article) {
        $firstImage = $article->images->first();
        // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
        $firstImages[] = $firstImage;
    }

    //
    $galeries = Galerie::with('images')->latest()->take(3)->get();
    // Créer un tableau pour stocker les premières images de chaque article
    $firstImgs = [];
    // Pour chaque article, récupérer sa première image (s'il en a)
    foreach ($galeries as $galerie) {
        $firstImage = $galerie->images->first();
        // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
        $firstImgs[] = $firstImage;
    }
        return view('acceuil', compact('articles','firstImages','firstImgs','galeries'));
    }
}
