@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" dom="Qfrtip" searchBuilder="{
            conditions: {
                'num':{
    // Overwrite the equals condition for the num type
    '+-5': {
    // This function decides whether to include the criteria in the search
    isInputValid: function (el, that) {
    let allFilled = true;

    // Check each element to make sure that the inputs are valid
    for (let element of el) {
    if ($(element).is('input') && $(element).val().length === 0) {
    allFilled = false;
    }
    }

    return allFilled;
    },
    // This is the string displayed in the condition select
    conditionName: '+- 5',
    // This function gathers/sets the values from the dom elements created in the init function that are to be used for searching
    inputValue: function (el) {
    let values = [];

    // Go through the input elements and push each value to the return array
    for (let element of el) {
    if ($(element).is('input')) {
    values.push($(element).val());
    }
    }

    return values;
    },
    // This function initialises the criteria, specifically any dom elements that are required for its use
    init: function(that, fn, preDefined = null) {
    // Declare the input element
    let el = $('<input/>')
    .addClass(that.classes.value)
    .addClass(that.classes.input)
    .on('input', function() { fn(that, this); });

    // If there is a preDefined value then add it
    if (preDefined !== null) {
    $(el).val(preDefined[0]);
    }

    return el;
    },
    // Straightforward search function comparing value from table and comparison from the input element
    // These values are retrieved in `inputValue`
    search: function (value, comparison) {
    return +value <= +comparison[0] + 5 && +value >= +comparison[0] - 5;
    }
    }
    }
    }
    }" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" dom="Qfrtip" searchBuilder="{
            conditions: {
                'num':{
    // Overwrite the equals condition for the num type
    '+-5': {
    // This function decides whether to include the criteria in the search
    isInputValid: function (el, that) {
    let allFilled = true;

    // Check each element to make sure that the inputs are valid
    for (let element of el) {
    if ($(element).is('input') && $(element).val().length === 0) {
    allFilled = false;
    }
    }

    return allFilled;
    },
    // This is the string displayed in the condition select
    conditionName: '+- 5',
    // This function gathers/sets the values from the dom elements created in the init function that are to be used for searching
    inputValue: function (el) {
    let values = [];

    // Go through the input elements and push each value to the return array
    for (let element of el) {
    if ($(element).is('input')) {
    values.push($(element).val());
    }
    }

    return values;
    },
    // This function initialises the criteria, specifically any dom elements that are required for its use
    init: function(that, fn, preDefined = null) {
    // Declare the input element
    let el = $('<input/>')
    .addClass(that.classes.value)
    .addClass(that.classes.input)
    .on('input', function() { fn(that, this); });

    // If there is a preDefined value then add it
    if (preDefined !== null) {
    $(el).val(preDefined[0]);
    }

    return el;
    },
    // Straightforward search function comparing value from table and comparison from the input element
    // These values are retrieved in `inputValue`
    search: function (value, comparison) {
    return +value <= +comparison[0] + 5 && +value >= +comparison[0] - 5;
    }
    }
    }
    }
    }" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
