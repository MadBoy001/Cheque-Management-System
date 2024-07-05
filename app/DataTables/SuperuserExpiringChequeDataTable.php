<?php

namespace App\DataTables;

use App\Models\Cheque;
use App\Models\SuperuserExpiringCheque;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SuperuserExpiringChequeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function ($query) {
            // $editBtn = "<a href='".route('admin.cheque.edit', $query->id)."' class='datatable-btn edit-btn'><i class='bx bx-edit'></i></a>";
            // $deleteBtn = "<a href='".route('admin.cheque.destroy', $query->id)."' class='datatable-btn delete-btn'><i class='bx bx-trash'></i></a>";      
            $editBtn = "<a href='" . route('superuser.cheque.edit', $query->id) . "' class='datatable-btn edit-btn'>Edit</a>";
            $deleteBtn = "<a href='" . route('superuser.cheque.destroy', $query->id) . "' class='datatable-btn delete-btn'>Delete</a>";

            return $editBtn . $deleteBtn;
        })
        ->rawColumns(['action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Cheque $model): QueryBuilder
    {
        $today = Carbon::today()->toDateString();
        $nextMonth = Carbon::today()->addMonth()->toDateString();
        return $model->newQuery()
            ->where('chequeexpirydate', '>', $today)
            ->where('chequeexpirydate', '<', $nextMonth);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('superuserexpiringcheque-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('clientname'),
            Column::make('clientcode'),
            Column::make('chequeno'),
            Column::make('chequeamount'),
            Column::make('chequedate'),
            Column::make('chequeexpirydate'),
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
        return 'SuperuserExpiringCheque_' . date('YmdHis');
    }
}
