@extends('layouts.app')

@section('title') @lang('translation.Starter_Page') @endsection

@section('content')

    @component('components.breadcrumb')
        {{-- @slot('li_1') Utility @endslot --}}
        {{-- @slot('page_title') Starter Page @endslot --}}
    @endcomponent

@endsection
