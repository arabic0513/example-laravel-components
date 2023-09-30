@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" dom="Bfrtip" :options="['buttons' => '[
            {
                extend: `alert`,
                text: `My button 1`
            },
            {
                extend: `alert`,
                text: `My button 2`
            },
            {
                extend: `alert`,
                text: `My button 3`
            }
        ]']" :objects="['$.fn.dataTable.ext.buttons.alert' => '{className: `buttons-alert`,action: function ( e, dt, node, config ) {alert( this.text() );}}'
        ]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')

    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
