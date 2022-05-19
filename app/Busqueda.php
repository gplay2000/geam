<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Models\Reporte;


class Busqueda extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
        //Query Scope

    public function scopeName($query, $nombre_est)
    {
        if($nombre_est)
            return $query->where('name', 'LIKE', "%$nombre_est%");
    }

    
}