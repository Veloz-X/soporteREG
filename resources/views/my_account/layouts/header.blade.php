<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('my_account') }}">
                <img src="{{ asset(setting('app_logo')) }}" />
            </a>
        </div>
        <div class="header__pane ml-auto"></div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-menu nav text-capitalize">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="{{ route('frontend') }}">
                        <i class="fas fa-book fa-fw"></i>
                        <span>{{__('knowledge_base')}}</span>
                    </a>
                </li>
                @if (Auth()->User()->isEmployee())
                <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt fa-fw"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
                </li>
                @endif

                @if(isDemo())
                    <li>
                        <a class="btn btn-success text-white btn-sm mr-3" href="#">
                            {{__('Buy NOW')}}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="app-header-right">
            <ul class="header-menu nav text-capitalize">
                <v-notifications class="pt-2"></v-notifications>
                <li class="nav-item dropdown no-arrow d-lg-inline text-center text-white ml-3 rounded bg-light">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" width="24" src="{{ Auth::user()->avatar() }}">
                        <span class="ml-2 text-gray-600 small">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('my_account.profile')}}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{__('Profile')}}
                        </a>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{ __('Logout') }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>