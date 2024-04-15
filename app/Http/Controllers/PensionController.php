<?php

namespace App\Http\Controllers;

use App\Models\Pension;
use Illuminate\Http\Request;

class PensionController extends Controller
{
    public function home()
    {
        $pensions = Pension::all();
        return view('home', compact('pensions'));
    }
    
    public function search(Request $request)
    {
        $matricule = $request->input('matricule');
        
        // Effectuer la recherche dans la base de données
        $pensions = Pension::where('matricule', 'like', "%$matricule%")->get();
    
        return view('results', compact('pensions'));
    }
}
