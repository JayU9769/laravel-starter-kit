<?php

namespace App\DataTables;

use App\Category;
use App\Traits\GlobalDataTableTrait;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
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
            ->editColumn('name', static function($query) {
                return $query->name;
            })
            ->addColumn('action', static function($query){
                return view('Admin.Categories.dataTableAction',compact('query'))->render();
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
            'DT_RowIndex' =>  ['title' => 'Sr No.' ,'data' => 'DT_RowIndex','orderable' => false, 'searchable' => false ],
            'name',
            'slug',
        ];
    }
}
