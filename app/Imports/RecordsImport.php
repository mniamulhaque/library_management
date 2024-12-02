<?php

namespace App\Imports;

use App\Models\BookSelf;
use App\Models\Record;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class RecordsImport implements ToModel, WithValidation
{
    /**
     * Map each row to a Record model.
     */
    public function model(array $row)
    {
        return new Record([
            'name'  => $row[0],
            'email' => $row[1],
            'age'   => $row[2],
        ]);
    }

    /**
     * Define validation rules for rows.
     */
    public function rules(): array
    {
        return [
            '0' => 'required|string',
            '1' => 'required|email|unique:records,email',
            '2' => 'required|integer|min:18',
        ];
    }
}
