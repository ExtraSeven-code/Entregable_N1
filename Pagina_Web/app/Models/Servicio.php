<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $servicio
 * @property $nombre
 * @property $descripción
 * @property $disponibilidad
 * @property $costo
 * @property $horario
 * @property $created_at
 * @property $updated_at
 *
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
    protected $fillable = ['servicio', 'nombre', 'descripción', 'disponibilidad', 'costo', 'horario'];


}
