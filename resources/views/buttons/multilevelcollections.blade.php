@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" dom="Bfrtip" :options="['buttons' => '[{extend: `collection`,text: `Table control`,buttons: [{text: `Toggle start date`,action: function ( e, dt, node, config ) {dt.column( -2 ).visible( ! dt.column( -2 ).visible() );}},{text: `Toggle salary`,action: function ( e, dt, node, config ) {dt.column( -1 ).visible( ! dt.column( -1 ).visible() );}},{popoverTitle: `Visibility control`,extend: `colvis`,collectionLayout: `two-column`}]}]']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')

    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
