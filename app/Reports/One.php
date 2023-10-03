<?php

namespace App\Reports;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class One extends DefaultValueBinder implements WithStyles, FromCollection, WithHeadings,WithCustomStartCell,WithEvents
{
    use Exportable;

    private Builder $query;

    public function __construct($startDate,$endDate)
    {
        $this->query = User::query()->select('id','name','email');
    }

    /**
     * @return string
     */
    public function startCell(): string
    {
        return 'A1';
    }

    /**
     * @param Worksheet $sheet
     * @return Worksheet
     */
    public function styles(Worksheet $sheet): Worksheet
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        return $sheet;
    }

    /**
     * @return Builder[]|Collection|\Illuminate\Support\Collection
     */
    public function collection(): Collection|\Illuminate\Support\Collection|array
    {
        return $this->query->get();
    }

    /**
     * @return string[]
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
        ];
    }

    /**
     * Report's Title
     *
     * @return string
     */
    public static function title() : string
    {
        return 'Отчет';
    }

    /**
     * Report header
     *
     * @return array
     */
    public static function headers(): array
    {
        return [
            [
                __('ID') => [
                    'rowspan' => 0,
                    'colspan' => 0,
                ],
                __('Name') => [
                    'rowspan' => 0,
                    'colspan' => 0,
                ],
                __('Email') => [
                    'rowspan' => 0,
                    'colspan' => 0,
                ],
                __('Branch ID') => [
                    'rowspan' => 0,
                    'colspan' => 0,
                ],
                __('Updated At') => [
                    'rowspan' => 0,
                    'colspan' => 0,
                ],
            ],
        ];
    }

    /**
     * Report Columns
     *
     * @return array
     */
    public static function columns(): array
    {
        return [
            ['data' => 'id', 'name' => 'id'],
            ['data' => 'name', 'name' => 'name'],
            ['data' => 'email', 'name' => 'email'],
            ['data' => 'branch_id', 'name' => 'branch_id'],
            ['data' => 'updated_at', 'name' => 'updated_at'],
        ];
    }

    /**
     * Event
     *
     * @return array
     */
    public static function events(): array
    {
        return [
//            "draw.dt" => "function () {alert( 'Table redrawn' );}",
//            "autoFill" => "function ( e, datatable, cells ) {alert( (cells.length * cells[0].length)+' cells were updated' );}",
//            "buttons-action" => "function ( e, buttonApi, dataTable, node, config ) {console.log( 'Button '+buttonApi.text()+' was activated' );}",
//            "column-reorder" => "function ( e, settings, details ) {var headerCell = $( table.column( details.to ).header() );headerCell.addClass( 'reordered' );setTimeout( function () {headerCell.removeClass( 'reordered' );}, 2000 );}",
//            "key" => "function ( e, datatable, key, cell, originalEvent ) {if ( key === 13 ) {setTimeout( function() {editor.one( 'close', function () {table.keys.enable();} ).inline( cell.node() );}, 100 );table.keys.disable();}}",
//            "responsive-display" => "function ( e, datatable, row, showHide, update ) {console.log( 'Details for row '+row.index()+' '+(showHide ? 'shown' : 'hidden') );}",
//            "rowgroup-datasrc" => "function ( e, dt, val ) {table.order.fixed( {pre: [[ val, 'asc' ]]} ).draw();}",
//            "row-reorder" => "function ( e, diff, edit ) {for ( var i=0, ien=diff.length ; i<ien ; i++ ) { $(diff[i].node).addClass('reordered');}}",
//            "select" => "function ( e, dt, type, indexes ) {table[ type ]( indexes ).nodes().to$().addClass( 'custom-selected' );}",
//            "draw stateRestore-change" => "function() {
//        var active = table.stateRestore.activeStates();
//        var activeString = 'Active States: ';
//        if(active.length > 0) {
//            activeString += active[0].name;
//            for(var i = 1; i < active.length; i++) {
//                activeString += ', '+active[i].name;
//            }
//        }
//        else {
//            activeString += 'No active state';
//        }
//        $('div.activeStates').text(activeString)
//    }",
        ];
    }

    /**
     * Options
     *
     * @return array
     */
    public static function options(): array
    {
        return [
//            "colReorder" => "{order: [4, 3, 2, 1, 0, 5]}",
//            "fixedColumns" => "{left: 1,right: 1}",
//            "fixedHeader" => "{header: false,footer: true}",
//            "keys" => "true",
//            "responsive" => "{details: false}",
//            "rowGroup" => "{dataSrc: 'group',enable: false}",
//            "rowReorder" => "{dataSrc: 'sequence',editor:  editor}",
//            "scrollY" => "true",
//            "scroller" => "{rowHeight: 30}",
//            "searchBuilder" => "{columns: [1,2,3]}",
//            "searchPanes" => "{cascadePanes: true,clear: false}",
//            "select" => "{info: false}",
        ];
    }

    /**
     * Write code on Method
     *
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {

                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(40);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(40);
                $event->sheet->getDelegate()->getColumnDimension('G')->setWidth(40);
                $event->sheet->getDelegate()->getColumnDimension('H')->setWidth(40);


                $event->sheet->getDelegate()->getStyle('1')
                    ->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
}
