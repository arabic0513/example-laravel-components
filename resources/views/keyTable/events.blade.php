@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" keys="true" :functions="['message' => ['parameters' => 'str','value' => 'let events = document.querySelector(`#reportText`);
                let div = document.createElement(`div`);

                div.innerHTML = str;
                events.prepend(div);']]" :options="['fixedHeader' => 'true']" :events="['key' => 'function (e, datatable, key, cell, originalEvent) {message(`Key press: ` + key + ` for cell <i>` + cell.data() + `</i>`);}','key-focus' => 'function (e, datatable, cell) {message(`Cell focus: <i>` + cell.data() + `</i>`);}','key-blur' => 'function (e, datatable, cell) {message(`Cell blur: <i>` + cell.data() + `</i>`);}']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
