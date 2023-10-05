@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    @php
        $fn1 = "$.fn.dataTable.ext.searchBuilder.conditions.role_id = {
        '=': {
            // This function decides whether to include the criteria in the search
            isInputValid: function (el, that) {
                // If no options have been selected, or one has but it has no value then do not include the criteria
                if (
                    $(el[0]).has('option:selected').length < 1 ||
                    (
                        $(el[0]).has('option:selected').length === 1 &&
                        $($(el[0]).children('option:selected')[0]).text().length === 0
                    )
                ) {
                    return false;
                }

                return true;
            },
            // This is the string displayed in the condition select
            conditionName: 'Equals',
            // This function gathers/sets the values from the dom elements created in the init function that are to be used for searching
            inputValue: function (el) {
                let values = [];

                for (let element of el) {
                    if ($(element).is('select')) {
                        values.push($(element).children('option:selected').val());
                    }
                }

                // return the selected values
                return values;
            },
            // This function initialises the criteria, specifically any dom elements that are required for its use
            init: function (that, fn, preDefined = null) {
                // As the select2 element is going to be populated with the values from the table,
                // we need the row indexes and the column index.
                let column = $(that.dom.data).children('option:selected').val();
                let indexArray = that.s.dt.rows().indexes().toArray();
                let settings = that.s.dt.settings()[0];
                let added = [];

                // Declare select2 element
                let el = $(`<select class='js-example-placeholder-single js-states form-control' style='width: 300px'/>`);
                $(el).prepend('<option></option>');

                // Set necessary listener to trigger search
                el.on('select2:select', function() { fn(that, el); });

                // for each row
                for (let index of indexArray) {
                    // Extract the relevant data
                    let value = {
                        filter: settings.oApi._fnGetCellData(settings, index, column, that.c.orthogonal.search),
                        index,
                        text: settings.oApi._fnGetCellData(settings, index, column, 'display')
                    };

                    // If we have not already added this value
                    if (added.indexOf(value.filter) === -1) {
                        // Create the option to add to the select 2 element
                        let opt = $('<option>', {
                            text : value.text,
                            value : value.filter
                        })
                            .addClass(that.classes.option)
                            .addClass(that.classes.notItalic);

                        $(el).append(opt);

                        // Take note of the filter value so we do not add it again
                        added.push(value.filter);

                        // Check if it is preDefined and if so select it
                        if (preDefined !== null && opt.val() === preDefined[0]) {
                            opt.attr('selected', true);
                        }
                    }
                }

                // Trigger select2 on the select element when it is inserted into the dom
                $(el).on('dtsb-inserted', function(){
                    if($(el).hasClass('select2-hidden-accessible')) {
                        $(el).select2('destroy');
                    }

                    $(el).select2({placeholder:'Value'});

                    if(preDefined !== null) {
                        $(el).val(preDefined[0]);
                        $(el).trigger('input');
                    }
                })

                return el;
            },
            // Straightforward search function comparing value from table and comparison from the select2 element
            // These values are retrieved in `inputValue`
            search: function ( value, comparison) {
                return value === comparison[0];
            }
        }
    }";
    @endphp
    <x-SmartsTable tableId="report" dom="Qfrtip" :fn="[$fn1]" :options="['columnDefs' => '[{type: `role_id`, targets: 2}]']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="report1" dom="Qfrtip" :fn="[$fn1]" :options="['columnDefs' => '[{type: `role_id`, targets: 2}]']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
