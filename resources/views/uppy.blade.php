@extends('home')
@section('center_content')
    <div class="d-flex justify-content-center" id="file"></div>
    <x-SmartsUppy url="{{route('uploadImage')}}" target="#file" fieldName="file"></x-SmartsUppy>
@endsection
