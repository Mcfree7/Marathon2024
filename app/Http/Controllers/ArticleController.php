<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {

            $articles = Article::with('images')->latest()->take(30)->paginate(5);
            
            
            // Créer un tableau pour stocker les premières images de chaque article
            $firstImages = [];
    
            // Pour chaque article, récupérer sa première image (s'il en a)
            foreach ($articles as $article) {
                $firstImage = $article->images->first();
                // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
                $firstImages[] = $firstImage;
            }
            return view('admin.articles.index',compact('articles','firstImages'));
            
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
            
        ]));
        $article = new Article();
        $article->Titre = $request->titre;
        $article->Contenu = $request->contenu;
        $article->Date = $request->date;
        $article->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path=time().'.'.$image->extension();
                $image->move(public_path('article_images'), $path);
                $article->images()->create(['path' => $path]);
            }
        }
            

        return redirect()->route('article.index')->withSuccess('article ajouté avec succès');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
{
    $article->load('images');

    // Obtenir les 5 articles les plus récents avec leurs images
    $art = Article::with('images')->latest()->take(5)->get();
    
    // Créer un tableau pour stocker les premières images de chaque article
    $firstImages = [];

    // Pour chaque article, récupérer sa première image (s'il en a)
    foreach ($art as $a) {
        $firstImage = $a->images->first();
        // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
        $firstImages[] = $firstImage;
    }

    return view('pages.articles.show', compact('article', 'art', 'firstImages'));
}
public function detail(Article $article)
{
    $article->load('images');

    // Obtenir les 5 articles les plus récents avec leurs images
    $art = Article::with('images')->latest()->take(5)->get();
    
    // Créer un tableau pour stocker les premières images de chaque article
    $firstImages = [];

    // Pour chaque article, récupérer sa première image (s'il en a)
    foreach ($art as $a) {
        $firstImage = $a->images->first();
        // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
        $firstImages[] = $firstImage;
    }

    return view('pages.articles.show', compact('article', 'art', 'firstImages'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $article = Article::where('id',$article->id)->first();

        return view('admin.articles.edit',compact('article')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate(([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
            
        ]));
        $article = Article::where('id',$article->id)->first();
        $article->Titre = $request->titre;
        $article->Contenu = $request->contenu;
        $article->Date = $request->date;
        $article->save();

        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path=time().'.'.$image->extension();
                $image->move(public_path('article_images'), $path);
                $article->images()->create(['path' => $path]);
            }
        }
        return redirect()->route('article.index')->withSuccess('article modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article = Article::where('id',$article->id)->first();
        $article->delete();
        return redirect()->route('article.index')->withSuccess('article Supprimé avec succès');
    }

    //Affichage et detail fonctions
  /*   public function detail(Article $article)
    {
        
        $article = Article::where('id',$article->id)->first();
        $ar =DB::table('articles')->orderBy('Date','desc')->take(4)->get();
        return view('pages.article.show',compact('article','ar','break')) ; 
    }
 */
    public function affiche(){

      

        $articles = Article::with('images')->latest()->take(30)->paginate(9);
            
        // Créer un tableau pour stocker les premières images de chaque article
        $firstImages = [];

        // Pour chaque article, récupérer sa première image (s'il en a)
        foreach ($articles as $article) {
            $firstImage = $article->images->first();
            // Ajouter l'image au tableau (ou null si l'article n'a pas d'image)
            $firstImages[] = $firstImage;
        }
        return view('pages.articles.allarticles',compact('articles','firstImages'));
        }

}
