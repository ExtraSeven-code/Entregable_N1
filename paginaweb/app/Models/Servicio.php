<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $servicio
 * @property $desccripcion
 * @property $costo
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Bdpaginaweb.reserva[] $bdpaginaweb.reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['servicio', 'desccripcion', 'costo', 'fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany(\App\Models\reserva::class, 'id', 'servicio_id');
    }
    
}
