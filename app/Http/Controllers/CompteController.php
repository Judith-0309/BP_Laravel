<?php

namespace App\Http\Controllers;
use App\Compte;
//use Illuminate\Http\Request as HttpRequest;
//use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\Request ;

//use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function add()
    {
        return view('compte.add');
    }
    public function getAll()
    {
        return view('compte.list'); 
    }
    public function get($id)
    {
        return view('compte.edit'); 
    }
    public function update()
    {
        return $this->getAll(); 
    }
    public function delete($id)
    {
        return $this->getAll(); 
    }
    public function persist(Request $request)
    {
        $compte = new Compte();

        $compte->typeCompte = $request->typeCompte;
        $compte->NumeroCompte = $request->NumeroCompte;
        $compte->CleRib = $request->CleRib;
        $compte->EtatCompte = $request->EtatCompte;
        $compte->DepotInitial = $request->DepotInitial;
        $compte->DateOuverture = $request->DateOuverture;

        $result = $compte->save();      //1(true) or 0(False)
       echo $result;
       
       // return $this->add(); 
    }
}

