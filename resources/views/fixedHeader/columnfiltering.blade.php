@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" headerclone="true" :options="['orderCellsTop' => 'true','fixedHeader' => 'true','initComplete' => 'function() {
            var api = this.api();
            // For each column
            api.columns().eq(0).each(function(colIdx) {
                // Set the header cell to contain the input element
                var cell = $(`.filters th`).eq($(api.column(colIdx).header()).index());
                var title = $(cell).text();
                $(cell).html( `<input type=text placeholder=` +title+ ` />` );
    // On every keypress in this input
    $(`input`, $(`.filters th`).eq($(api.column(colIdx).header()).index()) )
    .off(`keyup change`)
    .on(`keyup change`, function (e) {
    e.stopPropagation();
    // Get the search value
    $(this).attr(`title`, $(this).val());
    var regexr = `({search})`; //$(this).parents(`th`).find(`select`).val();
    var cursorPosition = this.selectionStart;
    // Search the column for that value
    api
    .column(colIdx)
    .search((this.value != ``) ? regexr.replace(`{search}`, `(((`+this.value+`)))`) : ``, this.value != ``, this.value == ``)
    .draw();
    $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
    });
    });
    }']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" :options="['orderCellsTop' => 'true','fixedHeader' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
