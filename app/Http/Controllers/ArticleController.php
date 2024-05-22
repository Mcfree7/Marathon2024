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
            return view('admin.articles.index',compact('articles'));
            
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
