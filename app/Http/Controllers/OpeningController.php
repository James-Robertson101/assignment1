<?php

namespace App\Http\Controllers;

use App\Models\Opening;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    function index(){
        $openings = Opening::all();
        return view('openings.index',['openings'=>$openings]); 
    }
    function create()
    {
        return view('openings.create');
    }
    function about()
    {
        return view('openings.about');
    }
    function store(Request $request){        
    $opening = new Opening();
    $opening->name = $request->name;
    $opening->eco_code = $request->eco_code;
    $opening->pgn = $request->pgn;
    $opening->description = $request->description;
    $opening->save();
    return redirect('/')->with('success', 'Opening added successfully!');
    }
    function show($id)
    {
    $opening = Opening::find($id);
    return view('openings.show', ['opening' => $opening]);}
    
    function edit($id){
        $opening = Opening::find($id);
        return view('openings.edit',['opening'=>$opening]);
    }

    function update($id, Request $request){
    $opening = Opening::find($id);

    // Update fields
    $opening->name = $request->name;
    $opening->eco_code = $request->eco_code;
    $opening->pgn = $request->pgn;
    $opening->description = $request->description;

    // Save changes
    $opening->save();

    // Redirect with success message
    return redirect("/openings/{$opening->id}")->with('success', 'Opening updated');
    }

    public function destroy($id)
{
    $opening = Opening::find($id);
    $opening->delete();

    // Redirect to index with a success message
    return redirect('/')->with('success', 'Opening deleted successfully!');
}

}
