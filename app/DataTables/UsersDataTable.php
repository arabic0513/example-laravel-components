<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)->setRowId('id')->addColumn('password', '');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->select('id', 'name', 'email','updated_at');
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
            ->parameters([
                'dom' => 'QBfrtip',
                'serverSide' => 'true',
                'order' => [1, 'asc'],
                'select' => true,
                'buttons' => [
                    ['extend' => 'create', 'editor' => 'editor'],
                    ['extend' => 'edit', 'editor' => 'editor'],
                    ['extend' => 'selected','text' => 'Duplicate','action' => 'function (e, dt, node, config) {
                editor
                    .edit(this.row({ selected: true }).indexes(), {
                        title: `Duplicate record`,
                        buttons: `Create from existing`
                    })
                    .mode(`create`);
            }', 'editor' => 'editor'],
                    ['extend' => 'remove', 'editor' => 'editor'],
                    ['selectRows'],
                    ['selectColumns'],
                    ['selectCells'],
                    ['selectNone'],
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'data' => null,
                'defaultContent' => '',
                'className' => 'select-checkbox',
                'title' => '',
                'orderable' => false,
                'searchable' => false
            ],
            'id',
            'name',
            'email',
            'updated_at',
            [
                'data' => null,
                'className' => 'dt-center editor-edit row-edit',
                'defaultContent' => '<i class="fa fa-pencil"/>',
                'orderable' => false
            ],
            [
                'data' => null,
                'className' => 'dt-center editor-delete',
                'defaultContent' => '<i class="fa fa-trash"/>',
                'orderable' => false,
            ],
        ];
    }


}
