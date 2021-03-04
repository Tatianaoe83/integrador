<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'piso';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPiso';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPiso', 'nombre', 'idHospital'];

      public function hospital(){
        return $this -> belongsto('App\hospital','idHospital');
    }  

      public function cuartos(){
        return $this -> hasmany('App\cuarto','idPiso');
    }  
}

