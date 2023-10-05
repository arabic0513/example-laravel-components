@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <button id="enable">Enable FixedHeader</button> <button id="disable">Disable FixedHeader</button>
    <x-SmartsTable tableId="report" :addEventListener="['#enable' => '`click`, function () {report.fixedHeader.enable();}','#disable' => '`click`, function () {report.fixedHeader.disable();}']" :options="['fixedHeader' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>

    <button id="enable1">Enable FixedHeader</button> <button id="disable1">Disable FixedHeader</button>
    <x-SmartsTable tableId="report1" :addEventListener="['#enable1' => '`click`, function () {report1.fixedHeader.enable();}','#disable1' => '`click`, function () {report1.fixedHeader.disable();}']" :options="['fixedHeader' => 'true']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
