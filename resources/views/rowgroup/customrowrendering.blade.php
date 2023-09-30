@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" rowGroup="{dataSrc: 'branch_id'}" :functions="['addCell' => ['parameters' => 'tr, content, colSpan = 1','value' => 'let td = document.createElement(`th`);

    td.colSpan = colSpan;
    td.textContent = content;

    tr.appendChild(td);']]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
