<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;

trait GlobalDataTableTrait{

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px','class' => 'td-actions'])
            ->parameters($this->getBuilderParameters());
    }


    protected function getBuilderParameters()
    {
        return [
            'lengthMenu' => [[10,25, 100, 500, -1], [10,25, 100, 500, "All"]],
            'dom' => "r<'row mt-2' <'col-md-6 pl-4' l> <'col-md-6 d-flex justify-content-end pr-4' f>>"
                . "<'row mt-2' <'col-md-12' <'table-responsive' t> > >"
                . "<'row mt-2 mb-2 ' <'col-md-6 pl-4' i> <'col-md-6 pr-4' p>>",
            "autoWidth" => false,
            'language'      => [
                "paginate" => [
                    "next"=> '<i class="fas fa-angle-right"></i>', // or '→'
                    "previous"=> '<i class="fas fa-angle-left"></i>' // or '←'
                ]
            ],
            'buttons' => [],
            'initComplete' => "function () {
                this.api().columns().every(function ( index ){
                    var column = this;
                    $('#dataTableBuilder_wrapper thead').addClass('thead-light');
                    var input = document.createElement(\"input\");
                    $(input).addClass('form-control')
                    $(input).appendTo($(column.footer()).empty())
                    .on('keyup change', function () {
                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                        column.search(val ? val : '', false, false, true).draw();
                    });
                });
            }"

        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Export_file_' . date('YmdHis');
    }
}
?>
