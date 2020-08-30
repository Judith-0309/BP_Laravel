<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientEntreprise extends Model
{
    protected $fillable = array('nomEntreprise','adresse','email','telephone','ninea','registreCom','raisonSociale',);
    public static $rules = array ('nomEntreprise' => 'required|min:10',
                                  'adresse' => 'required|min:15',
                                  'email' => 'required|min:10',
                                  'telephone' => 'required|min:9',
                                  'ninea' => 'required|min:10',
                                  'registreCom' => 'required|min:5',
                                  'raisonSociale' => 'required|min:10',
                                );
    
    public function compte()
    {
          return $this->hasMany('App\Compte');
    }
}