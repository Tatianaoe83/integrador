<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'area';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idArea';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idArea', 'nombre', 'descripcion'];

     public function cuartos(){
        return $this -> hasmany('App\cuarto','idArea');
    }  
}
