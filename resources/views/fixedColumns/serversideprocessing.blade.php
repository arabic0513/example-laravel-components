@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" serverSide="true" scrollY="300" scrollX="true" :options="['fixedColumns' => 'true','scrollCollapse' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" serverSide="true" scrollY="300" scrollX="true" :options="['fixedColumns' => 'true','scrollCollapse' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    <style>
        /* Ensure that the demo table scrolls */
        th, td { white-space: nowrap; }
        div.dataTables_wrapper {
            width: 600px;
            margin: 0 auto;
        }

        /* Lots of padding for the cells as SSP has limited data in the demo */
        th,
        td {
            padding-left: 40px !important;
            padding-right: 40px !important;
        }
    </style>
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
