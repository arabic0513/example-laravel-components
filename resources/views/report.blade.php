@extends('home')
@section('center_content')
    <x-SmartsTable tableId="report" dom='QBlfrtip' getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
@endsection
