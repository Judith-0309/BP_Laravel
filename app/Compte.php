<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('client_entreprises_id','typeCompte','NumeroCompte','CleRib','EtatCompte',
    'DepotInitial','DateOuverture',);
    public static $rules = array ('typeCompte' => 'required|min:10',
                                  'NumeroCompte' => 'required|min:5',
                                  'CleRib' => 'required|min:5',
                                  'EtatCompte' => 'required|min:10',
                                  'DepotInitial' => 'required|min:20',
                                  'DateOuverture' => 'required|min:3',
                                 
                                );
    
    public function compte()
    {
          return $this->belongsTo('App\ClientEntreprise');
    }
}
