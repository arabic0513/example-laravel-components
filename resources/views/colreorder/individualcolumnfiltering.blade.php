@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <x-SmartsTable tableId="report" colReorder="true" :options="['initComplete' => 'function () {
        let api = this.api();

        api.columns().every(function () {
            let column = this;
            let title = column.footer().textContent;
            let th = column.footer();

            // Create input element
            let input = document.createElement(`input`);
            input.placeholder = title;
            th.replaceChildren(input);

            // Event listener for user input
            input.addEventListener(`keyup`, () => {
                if (column.search() !== this.value) {
                    let idx = [...th.parentNode.children].indexOf(th);

                    api.column(idx + `:visible`)
                        .search(input.value)
                        .draw();
                }
            });
        });
    }']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')

    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
