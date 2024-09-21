<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauScolaire;
use PhpParser\Node\Expr\FuncCall;

class NiveauScolaireController extends Controller
{
    public function index()
    {
        $niveauxScolaires = NiveauScolaire::orderBy("nom", "ASC")->paginate(2);
        return inertia("NiveauScolaire/IndexNiveauScolaire", ["niveauxScolaires" => $niveauxScolaires]);
    }

    public function store(Request $request)
    {
        $request->validate(["nom" => "required"]);
        NiveauScolaire::create(["nom" => $request->nom]);
        return redirect()->back();
    }
}
