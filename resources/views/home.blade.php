@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @yield('center_content')
@stop
@section('css')
    @bukStyles(true)
@stop

@section('js')
    @bukScripts(true)
@stop
