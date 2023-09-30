@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @php
        $buttons = "[
            {
                extend: 'savedStates',
                config: {
                    splitSecondaries: [
                        'updateState',
                        'removeState',
                        '<h3>Custom HTML!</h3>',
                        'pdf',
                        {
                            extend: 'renameState',
                            className: 'red-border'
                        },
                        {
                            text: 'Custom Button',
                            action: function ( e, dt, node, config ) {
                                alert( 'Button activated' );
                            }
                        }
                    ]
                }
            },
            'createState'
        ]";
    @endphp
    <x-SmartsTable tableId="report" dom="Blfrtip" :options="['buttons' => $buttons]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
