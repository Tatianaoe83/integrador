<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paciente';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPaciente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPaciente', 'nombre', 'apellidos', 'sexo', 'fecha_nacimiento', 'telefono', 'direccion', 'enfermedad'];

    

    public function pabellones(){
        return $this->belongsToMany(Pabellon::class, 'asignacioncuarto','idPaciente','idPabellon')->withPivot('fechaEntrada','horaEntrada','fechaSalida','horaSalida');
    }
}
