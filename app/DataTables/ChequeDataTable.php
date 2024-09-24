<?php

namespace App\DataTables;

use App\Exports\ChequeExport;
use App\Models\Cheque;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ChequeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('days_left', function($query) {
                // Check if the cheque is signed
                if ($query->datesigned === 'yes') {
                    return 'Indefinite';
                }
            
                $chequeDate = Carbon::parse($query->chequedate);
                // Assuming a cheque is valid for a certain number of days, e.g., 30 days
                $expiryDate = $chequeDate->addDays(180);
                $daysLeft = Carbon::now()->diffInDays($expiryDate, false);
            
                // Show "Expired" if the cheque has already expired
                return $daysLeft >= 0 ? $daysLeft . ' days' : 'Expired';
            })        
            ->addColumn('action', function($query){
                
                // $editBtn = "<a href='".route('admin.cheque.edit', $query->id)."' class='datatable-btn edit-btn'><i class='bx bx-edit'></i></a>";
                // $deleteBtn = "<a href='".route('admin.cheque.destroy', $query->id)."' class='datatable-btn delete-btn'><i class='bx bx-trash'></i></a>";      
                $editBtn = "<a href='".route('admin.cheque.edit', $query->id)."' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Edit</a>";
                $deleteBtn = "<a href='".route('admin.cheque.destroy', $query->id)."' class='delete-item focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Delete</a>";                
            
                return $editBtn . $deleteBtn;
            })
            ->addColumn('status', function($query){
                switch ($query->status) {
                    case 'active':
                        return "<span class='badge bg-warning'>Received</span>";
                    case 'inactive':
                        return "<span class='badge bg-success'>Withdrawn</span>";
                    default:
                        break;
                }
            })
            ->rawColumns(['action', 'days_left', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Cheque $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function export()
    {
        return Excel::download(new ChequeExport(), 'cheques.xlsx');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('cheque-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([
                        // Button::make('excel'),
                        // Button::make('csv'),
                        // Button::make('pdf'),
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->orderBy('desc'),
            Column::make('clientname'),
            Column::make('clientcode'),
            Column::make('chequeno'),
            Column::make('chequeamount'),
            // Column::make('chequedate'),
            // Column::make('chequeexpirydate'),
            Column::make('days_left'),
            Column::make('status'),
            Column::make('remarks'),
            // Column::make('add your columns'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Cheque_' . date('YmdHis');
    }
    
}
