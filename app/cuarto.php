<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuarto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cuarto';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idCuarto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCuarto', 'nombre', 'ubicacion', 'idPiso', 'idArea', 'idEstatus'];

 
         public function Pabellon(){
        return $this -> hasmany('App\Pabellon','idCuarto');
    }  
    
      public function piso(){
        return $this -> belongsto('App\Piso','idPiso');
    }  

      public function area(){
        return $this -> belongsto('App\Area','idArea');
    }  

      public function estatus(){
        return $this -> belongsto('App\Estatus','idEstatus');
    }  
}
