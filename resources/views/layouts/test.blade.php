@extends('adminlte::page')

@section('title')
    @yield('title')
@stop
{{-- @php
    $yieldContent = $__env->yieldContent('content-header');
    // echo $yieldContent
@endphp --}}

@section('content_header')
    {{-- @if ('content-header' == 'dashboard')
    <script>
         document.getElementById('menu').style.display = 'none';
    </script>
@endif --}}
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">@yield('content-header')</h1>
        </div>
        <div class="col-sm-6" id="menu">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('content-header')</li>
            </ol>
        </div>
    </div>
    @if (Route::currentRouteName() == 'home')
        <script>
            console.log('tes')
            document.getElementById('menu').style.display = 'none';
        </script>
    @endif
    {{-- @if (!request()->is('dashboard'))
    @endif --}}
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"> --}}
    <style>
        .select2-container--default .select2-selection--single {
            height: 40px !important;
        }

        .select2-selection__arrow {
            top: 7px !important;
        }

        body {
            font-family: cursive;
        }

        /* .small-box .overlay {
                                                                                                                            position: absolute;
                                                                                                                            top: 0;
                                                                                                                            left: 0;
                                                                                                                            width: 100%;
                                                                                                                            height: 100%;
                                                                                                                            background: rgba(255, 255, 255, 0.8);
                                                                                                                            display: flex;
                                                                                                                            align-items: center;
                                                                                                                            justify-content: center;
                                                                                                                            z-index: 999;
                                                                                                                            display: none;
                                                                                                                        }

                                                                                                                        .small-box.loading .overlay {
                                                                                                                            display: flex;
                                                                                                                        }

                                                                                                                        .small-box.loading .overlay i {
                                                                                                                            font-size: 30px;
                                                                                                                            animation: fa-spin 2s infinite linear;
                                                                                                                        }

                                                                                                                        @keyframes fa-spin {
                                                                                                                            0% {
                                                                                                                                transform: rotate(0deg);
                                                                                                                            }

                                                                                                                            100% {
                                                                                                                                transform: rotate(360deg);
                                                                                                                            }
                                                                                                                        } */
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="public\vendor\jquery\jquery.js"></script>
    <script src="public\vendor\jquery\jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- <script src="vendor\almasaeed2010\adminlte\plugins\select2\js\select2.js"></script> --}}
    {{-- <script src="vendor\almasaeed2010\adminlte\plugins\select2\css\select2.css"></script> --}}
    {{-- <script src="vendor\almasaeed2010\adminlte\plugins\select2\css\select2.min.css"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    {{-- <script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script> --}}
    {{-- <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
    <script>
        $(function() {
            $('.select2').select2();
            $('.todo-list').sortable();

            $('.connectedSortable').sortable({
                connectWith: ".connectedSortable",
                cursor: "handle"
            }).disableSelection();
            setTimeout(() => $('.overlay').fadeOut('slow'), 700);
        })
        // $(function() {

        //     $('.small-box').addClass('loading');

        //     setTimeout(function() {
        //         $('.small-box').removeClass('loading');
        //     }, 2000);
        // });
    </script>

@stop
