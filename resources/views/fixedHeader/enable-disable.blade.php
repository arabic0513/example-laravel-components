@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <button id="enable">Enable FixedHeader</button> <button id="disable">Disable FixedHeader</button>

    <x-SmartsTable tableId="report" :addEventListener="['#enable' => '`click`, function () {table.fixedHeader.enable();}','#disable' => '`click`, function () {table.fixedHeader.disable();}']" :options="['fixedHeader' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
