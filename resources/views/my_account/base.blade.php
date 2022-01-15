<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($pageTitle) ? $pageTitle : setting('app_name') }}</title>

    <link href="{{ asset(setting('favicon')) }}" rel="icon">
    <link href="{{ asset(setting('favicon')) }}" rel="apple-touch-icon">
    
    <link href="{{ asset('assets/my_account/css/app.css?v='.config('vars.asset_version')) }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/nprogress/nprogress.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/libs/vue-select/vue-select.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    @if(isRTL(app()->getLocale()))
    <link href="{{ asset('assets/common/css/rtl.css?v='.config('vars.asset_version')) }}" rel="stylesheet">
    @endif 
    
    @yield('head_assets')
    @yield('style')
    @yield('script')

    <script>
        const BASE_URL = "{{ url('') }}/";
        const MYACCOUNT_URL = "{{ route('my_account') }}/"; 
        const API_URL = "{{ url('/api') }}/";
    </script>

</head>

<body id="page-top">
    <div id="app" :class="{ 'sidebar-toggled' : sidebarToggled == true}">
        <div class="app-container app-theme-white body-tabs-shadow">
            @include('my_account.layouts.header')
            <div class="app-main">
                <div class="app-main__outer">
                    <div class="app-main__inner container">

                        @section('page-heading')
                            @isset($pageTitle)
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        {{ $pageTitle }}
                                    </div>
                                </div>
                            </div>
                        @endisset

                        @if(isDemo())
                        <div class="alert alert-info" role="alert">
                            This is a working Demo version, Some features has been disabled
                        </div>
                        @endif

                        @show
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if (session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @yield('content')
                    </div>
                    @include('my_account.layouts.footer')
                </div>
            </div>
        </div>

        <a class="scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="{{ asset('assets/js/app.js?v='.config('vars.asset_version')) }}" defer></script>
    <script src="{{ asset('assets/libs/nprogress/nprogress.min.js') }}"></script>
    <script src="{{ asset('assets/libs/vue-select/vue-select.min.js') }}"></script>
    <script src="{{ route('my_account.lang') }}?v={{config('vars.asset_version')}}" ></script>

    @yield('script_footer')

</body>

</html>