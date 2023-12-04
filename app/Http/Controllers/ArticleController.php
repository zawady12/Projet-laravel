<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    PUblic function index()
    {
        $article = Article::all();
        //dd($article);
        return view('article',compact('article'));
    }
    PUblic function tab()
    {
        $article = Article::all();
        $tabarticle = Article::all();
        //dd($tabarticle);
        return view('tabarticle',compact('tabarticle'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    PUblic function create()
    {
        return view('article');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    PUblic function store(Request $request)
    {
        $request->validate([
            'CodeA' => 'required',
            'designA'=>'required',
            'PU'=>'required',
        ]);        
        $article = new Article;
        $article->CodeA = $request->CodeA;
        $article->designA = $request->designA;
        $article->PU = $request->PU;

        $article->save();
        return redirect()->route('getarticle')->with('success','article enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    PUblic function show($id)
    {
        $article =  Article::find($id);

        return view('viewarticle', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    PUblic function edit($id)
    {
        $article= Article::find($id);
        
        return view ('editarticle',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    PUblic function update(Request $request)
    { 
        $this->validate($request, [
            'CodeA' => 'required',
            'designA'=>'required',
            'PU'=>'required',
        ]);
        $article= Article::find($request->id);
        $article->CodeA = $request->CodeA;
        $article->designA = $request->designA;
        $article->PU = $request->PU;
        $article->save();

        return redirect('/tabarticle')->with('success','article mis à jour');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    PUblic function destroy(Request $request,$id)
    {

        $article= Article::find($request->id);
        $article->delete();
    
        return back()->with('success','Suppression réussie');
    }

}
