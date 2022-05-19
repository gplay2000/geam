<?php

namespace App\Imports;

use App\Models\Reporte;
use App\Models\Institucion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ReportesImport implements ToModel, WithHeadingRow, WithBatchInserts,WithChunkReading

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $instituciones;

    public function __construct(){

        $this->instituciones = Institucion::pluck('id_ins','nombre_ins');
    }

    public function model(array $row)
    {
        return new Reporte([

            'nombre_est' =>  $row['nombre'],
            'puesto' => $row['puesto'],
            'total_p' =>  $row['total'],
            'ingles_p' =>  $row['ingles'],
            'lect_p' => $row['lectura'],
            'mate_p' =>  $row['matematicas'],
            'soci_p' =>  $row['sociales'],
            'nat_p' =>  $row['naturales'],
            'id_instituciones' =>$this->instituciones[$row['institucion']] ,
           
        ]);
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
