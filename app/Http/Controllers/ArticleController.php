<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Utilizzo eager loading per caricare la relazione tags insieme agli articoli
        // Questo evita il problema delle N+1 query quando accediamo a $article->tags nel template
        $articles = Article::with('tags')->get();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {

        $image=null;
        if($request->file('image')){
            $image=$request->file('image')->store('images', 'public');
        }

        $article=Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$image,
         
        ]);

        $article->tags()->attach($request->tags);
        return redirect('/articles')->with('success', 'Articolo creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        // Gestione dell'immagine - mantieni quella esistente se non viene caricata una nuova
        $image = $article->image;
        if($request->file('image')){
            $image = $request->file('image')->store('images', 'public');
        }

        // Aggiorna l'articolo nel database
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
        ]);

        return redirect()->route('articles.index')->with('success', 'Articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
