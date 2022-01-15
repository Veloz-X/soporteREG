<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>{{ isset($title) ? $title : ( setting('site_title') ? setting('site_title') : 'Knowledge base' ) }}</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta content="{{ setting('site_keywords') }}" name="keywords">
  <meta content="{{ setting('site_description') }}" name="description">

  @if(isset($canonical))
  <link rel="canonical" href="{{ $canonical }}" />
  @endif

  <link href="{{ asset(setting('favicon')) }}" rel="icon">
  <link href="{{ asset(setting('favicon')) }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <link href="{{asset('assets/libs/fontawesome/css/all.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/css/app.css?v='.config('vars.asset_version'))}}" rel="stylesheet">

  <script>
    const BASE_URL = "{{ url('/') }}/";
  </script>

  @yield('styles')

  {!! customStyle('frontend') !!}

  {!! setting('custom_css') !!}

</head>

<body>
  <div id="app">
    @section('header')
    <header id="header" class="fixed-top">
      <div class="container">

        <div class="logo float-left">
          <a href="{{ route('frontend') }}" class="scrollto">
            <img src="{{ asset(setting('app_logo')) }}" class="img-fluid">
          </a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            @if(isDemo())
            <li>
              <a class="btn btn-success text-white btn-sm mr-3" href="#">
                {{__('Buy NOW')}}
              </a>
            </li>
            @endif

            @if(defaultSetting('ticket_allowed', true))
            <li><a class="btn btn-submit-ticket btn-sm mr-3"
                href="{{ route("my_account.tickets.create") }}">{{__('Submit a ticket')}}</a></li>
            @endif

            @if( count(availableLanguages()) > 1 )
            <li>
            <div class="btn-group dropup d-inline">
              <button type="button" class="btn btn-light dropdown-toggle p-2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ getLocaleName(App()->getLocale()) }}
              </button>
              <div class="dropdown-menu">
                @foreach (availableLanguages() as $lk => $lv)
                <a href="{{ url($lk) }}" class="dropdown-item">
                  {{ $lv }}
                </a>
                @endforeach
              </div>
            </div>
            </li>
            @endif

            @if (auth()->guest())
            <li><a href="{{ route('login') }}">{{__('Sign in') }}</a></li>
            @else
            <li class="nav-item">
              @if( auth()->user()->isEmployee())
              <a class="nav-link" href="{{ route('dashboard') }}">
                @else
                <a class="nav-link" href="{{ route('my_account') }}">
                  @endif
                  <img class="img-profile rounded-circle mr-1" width="24" src="{{ Auth::user()->avatar() }}">
                  <span class="mr-2 text-gray-600 small">{{ Auth::user()->name }}</span>
                </a>
            </li>
            @endif
          </ul>
        </nav>

      </div>
    </header>
    @show

    <section id="intro" class="clearfix text-white text-center">
      <div class="container">
        @section('sub-header')
        @show
      </div>
    </section>

    <main id="main">
      @yield('main_content')
    </main>

    <footer id="footer" class="bg-white p-3 text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <div class="copyright d-inline">
              &copy; {{__('Copyright')}} <strong>{{ setting('app_name') }}</strong>. {{__('All Rights Reserved')}}
            </div>

            @if( count(availableLanguages()) > 1 )
            <div class="btn-group dropup d-inline">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ getLocaleName(App()->getLocale()) }}
              </button>
              <div class="dropdown-menu">
                @foreach (availableLanguages() as $lk => $lv)
                <a href="{{ url($lk) }}" class="dropdown-item">
                  {{ $lv }}
                </a>
                @endforeach
              </div>
            </div>
            @endif

          </div>
        </div>

      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>

  @section('footer_js')
  <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets/libs/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ route('frontend.lang') }}?v={{config('vars.asset_version')}}"></script>
  <script src="{{ asset('assets/frontend/js/frontend.js?v='.config('vars.asset_version')) }}"></script>
  {!! setting('custom_js') !!}
  @show

</body>

</html>