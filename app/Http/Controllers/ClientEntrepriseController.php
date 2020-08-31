<?php

namespace App\Http\Controllers;

use App\ClientEntreprise;
//use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request ;

class ClientEntrepriseController extends Controller
{
    public function add()
    {
        return view('client.add');
    }
    public function getAll()
    {
        return view('client.list'); 
    }
    public function edit($id)
    {
        return view('client.edit'); 
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
        $client->adresse = $request->dresse;
        $client->email = $request->email;
        $client->telephone= $request->telephone;
        $client->ninea = $request->ninea;
        $client->registreCom = $request->DregistreCom;
        $client->raisonSociale = $request->raisonSociale;

        $client->save();
        return $this->add(); 
    }
}
