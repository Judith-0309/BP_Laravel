<?php

namespace App\Http\Controllers;

use App\ClientEntreprise;
//use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request ;

class ClientEntrepriseController extends Controller
{
    public function add()
    {
        return view('clientEntreprise.add');
    }
    public function getAll()
    {
        return view('clientEntreprise.list'); 
    }
    public function edit($id)
    {
        return view('clientEntreprise.edit'); 
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
        $client = new ClientEntreprise();

        $client->nomEntreprise = $request->nomEntreprise;
        $client->adresse = $request->adresse;
        $client->email = $request->email;
        $client->telephone= $request->telephone;
        $client->ninea = $request->ninea;
        $client->registreCom = $request->registreCom;
        $client->raisonSociale = $request->raisonSociale;

        $result = $client->save();
        
        return view('clientEntreprise.add' ,['confirmation'=>$result]); 
    }
}
