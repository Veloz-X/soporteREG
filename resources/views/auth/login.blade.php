@extends('auth.base')

@section('content')
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">

        <div class="row">
          <div class="col-lg-6 d-none d-lg-block login-aside">
            <div class="bg-login-image"></div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{__('auth.welcome')}}</h1>
                @if(isDemo())
                <div class="alert alert-info">
                  <div>Demo accounts</div>
                  <small class="d-inline-block">Admin : admin@demo.com / 12345678</small>
                  <small class="d-inline-block">Agent : agent@demo.com / 12345678</small>
                  <small class="d-inline-block">Customer : customer@demo.com / 12345678</small>
                </div>
                @endif
              </div>

              @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
              @endif

              <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">

                  <input id="email" type="email"
                    class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                    placeholder="{{ __('E-Mail Address') }}..." value="{{ old('email') }}" required autocomplete="email"
                    autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="form-group">
                  <input id="password" type="password"
                    class="form-control form-control-user @error('password') is-invalid @enderror"
                    placeholder="{{__('Password')}}..." name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                      {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">{{ __('auth.remember') }}</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      {{ __('auth.login') }}
                    </button>
                  </div>
                  <div class="col-12 mt-3">
                    @if(Route::has('register'))
                    {{ __("auth.dont_have_an_account") }} 
                    <a href="{{ route('register') }}">{{ __('auth.register_here') }} </a>
                    @endif
                  </div>
                </div>

                @if (isOAuthEnabled())
                <div class="mt-4 mb-1 text-capitalize">{{__('Login with')}}: </div>
                
                @foreach (OAuthProviders() as $OAuthProvider)
                <a href="{{ route('auth.socialite',  ['provider' => $OAuthProvider]) }}" class="btn btn-outline-primary rounded-pill btn-sm mb-2 text-capitalize">
                  <i class="fab fa-{{$OAuthProvider}}"></i> {{ $OAuthProvider }}
                </a>
                @endforeach
                @endif 
                

              </form>
              <hr class="m-0 mt-4">
              <div class="text-right">
                @if (Route::has('password.request'))
                <a class="my-4 small text-secondary" href="{{ route('password.request') }}">{{ __('auth.forgot_password') }}</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection