<?php

namespace App\Imports;

use App\Models\Committee;
use Maatwebsite\Excel\Concerns\ToModel;

class CommitteesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Committee([
            'e_name'     => $row[0],
            'b_name'     => $row[1],
            'email'    => $row[2],
            'phone' => $row[3],
            'affiliation' => $row[4],
            'type' => $row[5],
        ]);
    }
}
