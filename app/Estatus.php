<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estatus';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idEstatus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEstatus', 'estatus'];

     public function Pabellones(){
        return $this -> hasmany('App\Pabellon','idEstatus');
    }  

       public function cuartos(){
        return $this -> hasmany('App\cuarto','idEstatus');
    }  

}
