<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class General
 *
 * @property $id_gen
 * @property $fecha_reali
 * @property $pdf
 * 
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class General extends Model
{
  protected $table = 'generales';
  protected $primaryKey = "id_gen";
    static $rules = [
		'id_gen' => 'required',
		'fecha_reali' => 'required',
		'pdf' => 'required',
    
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_gen','fecha_reali','pdf'];



}
