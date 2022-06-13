@extends('layouts.app')

@section('title') @lang('translation.Modules') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        {{-- @slot('li_1') Utility @endslot --}}
        {{-- @slot('page_title') Starter Page @endslot --}}
    @endcomponent

    @livewire('modules.controller')
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        //executar javascript durante certos eventos
        document.addEventListener("DOMContentLoaded", () => {
            //ao entrar no componente
            configurarDataTable(1);
            showTooltips();
            hideTooltips();

            //ao navegar pelo componente
            Livewire.hook('message.processed', (message, component) => {
                configurarDataTable(1);
                showTooltips();
                hideTooltips();

                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {return new bootstrap.Popover(popoverTriggerEl)})
            })
        });
    </script>
@endsection
