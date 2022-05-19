<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institucion
 *
 * @property $id_v
 * @property $nombreavion_v
 * @property $asientosdis_v
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Institucion extends Model
{
  protected $table = 'instituciones';
  protected $primaryKey = "id_ins";
    static $rules = [
		'id_ins' => 'required',
		'nombre_ins' => 'required',
		'departamento' => 'required',
    'ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ins','nombre_ins','departamento','ciudad'];

    public function reporte()
    {
        return $this->belongsTo('App\Models\Reporte');
    }

}
