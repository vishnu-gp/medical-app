<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PatientsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Patient::all('id', 'name', 'email');
    }


    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'E-Mail',
        ];
    }

}