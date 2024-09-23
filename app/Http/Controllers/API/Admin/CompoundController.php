<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compound;
use Illuminate\Http\Response;

class CompoundController extends Controller
{
    public function index()
    {
        $compounds = Compound::all();
        return response()->json($compounds);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:191',
                'compound' => 'required|string|max:191',
            ]);
    
            $compound = Compound::create($request->only(['name', 'compound']));
    
            return response()->json($compound, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }
    
   
    public function show($id)
    {
        $compound = Compound::findOrFail($id);
        return response()->json($compound);
    }
    
    public function update(Request $request, $id) :Response
    {
        try {
            $request->validate([
                'name' => 'required|string|max:191',
                'compound' => 'required|string|max:191',
            ]);
        
            $compound = Compound::findOrFail($id);
            $compound->name = $request->input('name');
            $compound->compound = $request->input('compound'); // Corrected field name
            $compound->save();
            return Response(['status' => 'success', 'data' => $compound, 'message'=> 'Request success']);

        } catch (\Throwable $th) {
            return Response(['status' => 'error', 'data' => $th->getMessage(), 'message'=> 'Request failed']);
        }

    
    }


    public function destroy($id)
{
    $compound = Compound::findOrFail($id);
    $compound->delete();
    return response()->json(null, 204);
}

}
