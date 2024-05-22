<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImage;
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
        return view('acceuil', compact('articles','firstImages'));
    }
}
