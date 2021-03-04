<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleado';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idEmpleado';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpleado', 'nombre','apellidoMaterno', 'apellidoPaterno', 'direccion', 'telefono', 'sexo'];

    public function servicios(){
        return $this->belongsToMany(servicio::class, 'ronda','idServicio','idEmpleado');
    }
    
}
