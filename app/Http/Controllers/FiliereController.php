<?php

namespace App\Http\Controllers;


use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $filieres = Filiere::all();
        return view('indexf', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('createf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validateData = $request->validate([
            
            'name'=>'required|max:255',
            'description'=>'required',
           
         ]);  
          
       Filiere::create([
        "name" => $request->name,
        "description" => $request->description,
    ]);

        return redirect('/filieres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $ifiliere)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $filiere = Filiere::find($id);
        return view('editf', compact('filiere'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {

         $request->validate([

            'name'=>'required|max:255',
            'description'=>'required',
           

        ]);
        
         $input = $request->all();
           

        $filiere->update($input);

        return redirect('/filieres');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
         $filiere = Filiere::find($id);
        $filiere->delete(); // Easy right?

        return redirect('/filieres');

    }
}