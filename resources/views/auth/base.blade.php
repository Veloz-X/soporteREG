<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('app_name') }}</title>
    <link href="{{ asset('assets/frontend/css/auth.css?v='.config('vars.asset_version')) }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/fontawesome/css/all.css') }}" rel="stylesheet">

    {!! customStyle('frontend') !!}
    
</head>

<body>
    <div id="particles-js" class="bg-overly page-bg"></div>
    <div class="container" id="app">
        @yield('content')
    </div>
</body>

</html>