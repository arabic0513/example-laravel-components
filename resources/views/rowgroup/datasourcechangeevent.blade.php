@extends('adminlte::page')

@section('title', 'Example App')
@section('content_header')
@stop
@section('content')
    <ul>
        <li>
            <a class="group-by" data-column="0">Group by ID</a>
        </li>
        <li>
            <a class="group-by" data-column="1">Group by Name</a>
        </li>
        <li>
            <a class="group-by" data-column="2">Group by Role ID</a>
        </li>
        <li>
            <a class="group-by" data-column="3">Group by Email</a>
        </li>
    </ul>
    <x-SmartsTable tableId="report" rowGroup="{dataSrc: 'role_id'}" :querySelectorAll="['a.group-by' => 'forEach(el => {
            el.addEventListener(`click`, e => {
                e.preventDefault();

                let dataColumn = e.target.getAttribute(`data-column`);
                table.rowGroup().dataSrc(dataColumn);

            })
        })']" :events="['rowgroup-datasrc' => 'function (e, dt, val) {
    table.order.fixed({ pre: [[val, `asc`]] }).draw();
}']" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@stop
@section('css')
    @bukStyles(true)
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@stop

@section('js')
    @bukScripts(true)
@stop
