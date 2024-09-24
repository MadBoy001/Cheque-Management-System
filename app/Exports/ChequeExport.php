<?php

namespace App\Exports;

use App\Models\Cheque;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ChequeExport implements FromCollection
{
    use Exportable;

    /**
     * Return all cheque records for export.
     */
    public function collection()
    {
        return Cheque::all(); // Export all records
    }

}
