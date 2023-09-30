@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <div id="result" class="box">
        Event result:
    </div>
    <x-SmartsTable tableId="report" rowReorder="true" :events="['row-reorder' => 'function (e, diff, edit) {
  var temp = edit.triggerRow.data();
  var result =
    `Reorder started on row: ` + edit.triggerRow.data()[`name`] + `<br>`;

    for (var i = 0, ien = diff.length; i < ien; i++) {
    var rowData = table.row(diff[i].node).data();

    result +=
    rowData[`name`] +
    ` updated to be in position ` +
    diff[i].newData +
    ` (was ` +
    diff[i].oldData +
    `)<br>`;
    }

    $(`#result`).html(`Event result:<br>` + result);
    }']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
