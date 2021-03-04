<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idServicio';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idServicio', 'nombre', 'descripcion'];


     public function empleados(){
        return $this->belongsToMany(empleado::class, 'ronda','idServicio','idEmpleado')->withPivot('horaInicio','horaFin','fecha','observacionInicial','observacionFinal');
    }

    
}
