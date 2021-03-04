<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignacionronda extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asignacionrondas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'servicio', 'empleado', 'horaInicio', 'horaFin', 'observacionInicial', 'observacionFinal'];

    
}
