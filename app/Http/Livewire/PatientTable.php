<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use App\Exports\PatientsExport;
use Maatwebsite\Excel\Facades\Excel;

class PatientTable extends DataTableComponent
{

    public array $bulkActions = [
        'export' => 'Export',
    ];


    public function export()
    {
        
        return Excel::download(new PatientsExport, 'patients.xlsx');
    }

    public function columns(): array
    {
        return [
            Column::make('Id')
                ->sortable()
                ->searchable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Latest BP', 'latest_bp'),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }
}
