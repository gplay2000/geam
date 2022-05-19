<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reporte
 *
 * @property $id_check
 * @property $id_v
 * @property $id_res
 * @property $id_cli
 * @property $clase_res
 * @property $nombreavion_v
 * @property $asiento_v
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reporte extends Model
{
    
    static $rules = [
		'id' => 'required',
    'puesto' => 'required',
    'nombre_est' => 'required',
    'total_p' => 'required',
    'ingles_p' => 'required',
    'lect_p' => 'required',
    'mate_p' => 'required',
    'soci_p' => 'required',
    'nat_p' => 'required',
    'tipo_evalu' => 'required',
    'grado' => 'required',
    'id_instituciones' => 'required',
	
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','id_instituciones','puesto','nombre_est','total_p','ingles_p','lect_p','mate_p','soci_p','nat_p','tipo_evalu','grado'];

  /**
   * Get the user associated with the Reporte
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function institucion()
  {
      return $this->hasMany('App\Models\Institucion', 'id_ins', 'id_instituciones');
  }

}
