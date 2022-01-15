@extends('auth.base')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <a href="{{route('login')}}" class="float-right my-4 btn btn-light text-dark text-capitalize">{{__('login')}}</a>
        </div>
        <div class="col-xl-10 col-lg-12 col-md-9">
            
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block login-aside">
                            <div class="bg-login-image"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('auth.register') }}</h1>
                                </div>

                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    @foreach (customFields('user', 'auth_register') as $item)
                                    <div class="form-group row">
                                        <label for="custom_{{ $item['key'] }}" class="col-md-4 col-form-label text-md-right">
                                            {{ __($item['label']) }}
                                        </label>
                                        <div class="col-md-6">

                                            @switch($item['type'])
                                                @case('select')
                                                    <select id="custom_{{ $item['key'] }}" class="form-control @error("custom_".$item['key']) is-invalid @enderror" name="custom_{{ $item['key'] }}">
                                                        @if(is_array($item['value']))
                                                        @foreach ($item['value'] as $lk => $lv)
                                                            <option value="{{$lk}}" @if(old('locale') == $lk) selected @endif >
                                                            {{ $lv }}
                                                            </option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    @break
                                                @default
                                                <input id="custom_{{ $item['key'] }}" type="{{ $item['type'] }}" class="form-control @error("custom_".$item['key']) is-invalid @enderror" name="custom_{{ $item['key'] }}" value="{{ old("custom_".$item['key']) }}" required autocomplete="custom_{{$item['key']}}">
                                            @endswitch
                                            
                                            @error("custom_".$item['key'])
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endforeach

                                    @if(defaultSetting('user_register_locale', false) && count(availableLanguages()) > 1 )
                                    <div class="form-group row">
                                        <label for="locale" class="col-md-4 col-form-label text-md-right">
                                            {{ __('Language') }}
                                        </label>
                                        <div class="col-md-6">

                                            <select class="form-control @error('locale') is-invalid @enderror" name="locale">
                                            @foreach (availableLanguages() as $lk => $lv)
                                            <option value="{{$lk}}" @if(old('locale') == $lk) 
                                                selected    
                                            @elseif( $lk == App()->getLocale() )
                                                selected
                                            @endif >
                                              {{ $lv }}
                                            </option>
                                            @endforeach
                                            </select>

                                            @error("locale")
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('auth.register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection