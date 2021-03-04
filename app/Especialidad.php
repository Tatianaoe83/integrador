<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especialidad';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idEspecialidad';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEspecialidad', 'Especialidad'];

    public function Doctores(){
        return $this -> hasmany('App\Doctor','idEspecialidad');
    }

    
}
