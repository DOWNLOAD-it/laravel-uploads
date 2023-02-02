<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stagiaire;

class stagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stagiaires = stagiaire::all();
        return view('index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Fname' => 'required|max:255',
            'Lname' => 'required|max:255',
            'age' => 'required',
            'class' => 'required|max:255'
        ]);
    
        $stagiaire = stagiaire::create($validatedData);
    
        return redirect('/stagiaires')->with('success', 'Stagiaire crée avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stagiaire = stagiaire::findOrFail($id);
        return view('show', compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stagiaire = stagiaire::findOrFail($id);
        return view('edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Fname' => 'required|max:255',
            'Lname' => 'required|max:255',
            'age' => 'required',
            'class' => 'required|max:255'
        ]);
    
        stagiaire::whereId($id)->update($validatedData);
    
        return redirect('/stagiaires')->with('success', 'Stagiaire mis à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stagiaire = stagiaire::findOrFail($id)->delete();
    
        return redirect('/stagiaires')->with('success', 'Stagiaire supprimeé avec succèss');
    }
}
