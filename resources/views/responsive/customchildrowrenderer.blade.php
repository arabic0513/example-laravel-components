@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" responsive="{
        details: {
            renderer: function (api, rowIdx, columns) {
                let data = columns.map((col, i) => {
                    return col.hidden
                        ? '<tr data-dt-row=`' +
    col.rowIndex +
    '` data-dt-column=`' +
    col.columnIndex +
    '`>' +
    '<td>' +
        col.title +
        ':' +
        '</td> ' +
    '<td>' +
        col.data +
        '</td>' +
    '</tr>'
    : '';
    }).join('');

    let table = document.createElement('table');
    table.innerHTML = data;

    return data ? table : false;
    }
    }
    }" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" responsive="{
        details: {
            renderer: function (api, rowIdx, columns) {
                let data = columns.map((col, i) => {
                    return col.hidden
                        ? '<tr data-dt-row=`' +
    col.rowIndex +
    '` data-dt-column=`' +
    col.columnIndex +
    '`>' +
    '<td>' +
        col.title +
        ':' +
        '</td> ' +
    '<td>' +
        col.data +
        '</td>' +
    '</tr>'
    : '';
    }).join('');

    let table = document.createElement('table');
    table.innerHTML = data;

    return data ? table : false;
    }
    }
    }" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
