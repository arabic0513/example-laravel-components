@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" :options="['autoFill' => true]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"
                   :objects="['DataTable.AutoFill.actions.names' => '{
    available: function (dt, cells) {
        // Only available if a single column is being
        // filled and it is the first column
        return cells[0].length === 1 && cells[0][0].index.column === 0;
    },

    option: function (dt, cells) {
        // Ask the user if they want to change the surname only
        return `Fill only surname - retain first name`;
    },

    execute: function (dt, cells, node) {
        // Modify the name and set the new values
        var surname = cells[0][0].data.split(` `)[1];

        for (var i = 0, ien = cells.length; i < ien; i++) {
            var name = cells[i][0].data.split(` `);

            cells[i][0].set = name[0] + ` ` + surname;
        }
    },
};']"></x-SmartsTable>
    <x-SmartsTable tableId="report1" :options="['autoFill' => true]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"
                   :objects="['DataTable.AutoFill.actions.names' => '{
    available: function (dt, cells) {
        // Only available if a single column is being
        // filled and it is the first column
        return cells[0].length === 1 && cells[0][0].index.column === 0;
    },

    option: function (dt, cells) {
        // Ask the user if they want to change the surname only
        return `Fill only surname - retain first name`;
    },

    execute: function (dt, cells, node) {
        // Modify the name and set the new values
        var surname = cells[0][0].data.split(` `)[1];

        for (var i = 0, ien = cells.length; i < ien; i++) {
            var name = cells[i][0].data.split(` `);

            cells[i][0].set = name[0] + ` ` + surname;
        }
    },
};']"></x-SmartsTable>
@stop
@section('css')

    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
