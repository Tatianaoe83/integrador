<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pabellon extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pabellon';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPabellon';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPabellon', 'nombre', 'ubicacion', 'descripcion', 'idCuarto', 'idEstatus'];
  
       public function estatus(){
        return $this -> belongsto('App\Estatus','idEstatus');
    }

       public function cuartos(){
        return $this -> belongsto('App\cuarto','idCuarto');
    }

    public function pacientes(){
        return $this->belongsToMany(Paciente::class, 'asignacioncuarto','idPaciente','idPabellon');
    }
}
