<?php

namespace App\Imports;

use App\Models\Importation;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ImportationsImport implements ToModel,WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Importation([
            'date'     => Carbon::createFromFormat('d/m/Y',  $row[0]),
            'importateur'     => $row[1],
            'description'     => $row[2],
            'quantite'     => $row[3],
            'nserie'     => $row[4],
            'provenance'     => $row[5],
            'volume'     => $row[6],
            'classe'     => $row[7],
            'resultats'     => $row[8],
            'certificat'     => $row[9],
            'modele'     => $row[10],
            'echantiollonnage'     => $row[11],
            //
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
