<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cliente';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idCliente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente', 'idDoctor', 'idEmpleado'];

    
}
