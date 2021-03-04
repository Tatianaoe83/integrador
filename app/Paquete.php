<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paquete extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquete';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPaquete';
 
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPaquete', 'nombre', 'costo', 'descripcion', 'tiempo'];

     public function clientes(){
        return $this->belongsToMany(Cliente::class, 'asignacioncuarto','idPaciente','idPabellon');
    }


    public function Hospitales(){
        return $this->belongsToMany(hospital::class, 'Suscripcion', 'idPaquete', 'idHospital')->withPivot('fecha_inscripcion','fecha_fin');
    }

    
}
