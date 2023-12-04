<?php

namespace App\Http\Controllers;
use App\Models\Vendeur;
use App\Models\Article;
use Illuminate\Http\Request;

class VendeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $vendeur = Vendeur::all();


        //dd($vendeur);
        return view('vendeur',compact('article','vendeur'));
    }
    public function tab()
    {
        $article = Article::all();
        $tabvendeur = Vendeur::all();
        

        //dd($tabvendeur);
        return view('tabvendeur',compact('article','tabvendeur'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idV' => 'required',
            'nomV' => 'required',
            'prenomV' => 'required',
            'article_id' => 'required',
        ]);
        $vendeur = new Vendeur;
        $vendeur->idV = $request->idV;
        $vendeur->nomV = $request->nomV;
        $vendeur->prenomV = $request->prenomV;
        $vendeur->article_id = $request->article_id;


        $vendeur->save();

        
        return redirect()->route('getvendeur')->with('success','vendeur enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::all();
        $vendeur =  Vendeur::find($id);

        return view('viewvendeur', compact('article','vendeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::all();
        $vendeur= Vendeur::find($id);
        
        return view ('editvendeur',compact('article','vendeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'idV' => 'required',
            'nomV' => 'required',
            'prenomV' => 'required',
            'article_id' => 'required',

        ]);
        $vendeur= Vendeur::find($request->id);
        $vendeur->idV = $request->idV;
        $vendeur->nomV = $request->nomV;
        $vendeur->prenomV = $request->prenomV;
        $vendeur->article_id = $request->article_id;
      
        $vendeur->save();
        return redirect('/tabvendeur')->with('success','vendeur modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $vendeur= Vendeur::find($request->id);
        $vendeur->delete();
    
        return back()->with('success','Suppression réussie');
    }
}
