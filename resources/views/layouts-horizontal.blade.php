@extends('layouts.app')

@section('title') @lang('translation.Horizontal') @endsection

@section('body')
    <body data-topbar="dark" data-layout="horizontal">
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Layouts @endslot
        @slot('page_title') Horizontal @endslot
    @endcomponent



@endsection
@section('script')
    <!-- apexcharts -->

    <!-- dashboard init -->
@endsection
