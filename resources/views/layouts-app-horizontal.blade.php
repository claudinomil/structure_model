@extends('layouts.app')

@section('title') @lang('translation.Light_Sidebar') @endsection

@section('css')
@endsection

{{--@section('body')--}}
{{--@endsection--}}

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Starter Page @endslot
    @endcomponent
@endsection

@section('script')
@endsection
