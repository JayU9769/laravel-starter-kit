<?php

namespace App\DataTables;

use App\Category;
use App\Traits\GlobalDataTableTrait;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    use GlobalDataTableTrait;
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query): DataTableAbstract
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', static function($user){
                return view('users.datatable_action',compact('user'))->render();
            })
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @return Builder
     */
    public function query(): Builder
    {
        return Category::query()->select('*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px','class' => 'td-actions'])
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            //'DT_RowIndex' =>  ['title' => 'Sr No.' ,'data' => 'DT_RowIndex','orderable' => false, 'searchable' => false ],
            'slug',
            'name',
        ];
    }
}
