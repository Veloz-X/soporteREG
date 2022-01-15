<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <img src="{{ asset(setting('app_logo')) }}" />
            </a>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
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
                @canany('manage_articles','manage_categories','manage_employees','manage_customers')
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        {{__('new')}} <i class="fa fa-angle-down mx-2"></i>
                    </a>
                    <div class="dropdown-menu">
                        @can('manage_articles')
                        <a class="dropdown-item" href="{{ route('dashboard') }}#/articles/new">{{__('article')}}</a>
                        @endcan
                        @can('manage_categories')
                        <a class="dropdown-item" href="{{ route('dashboard') }}#/categories">{{__('category')}}</a>
                        @endcan
                        @can('manage_employees')
                        <a class="dropdown-item" href="{{route('dashboard.employees')}}">{{__('employee')}}</a>
                        @endcan
                        @can('manage_customers')
                        <a class="dropdown-item" href="{{route('dashboard.customers')}}">{{__('customer')}}</a>
                        @endcan
                    </div>
                </li>
                @endcanany
            </ul>
            <search-bar :searchtype="['articles','tickets', 'customers', 'categories']" placeholder="{{__('Search for')}}"></search-bar>
        </div>
        <div class="app-header-right">
            <ul class="header-menu nav text-capitalize">

                @if(isDemo())
                    <li>
                        <a class="btn btn-success text-white btn-sm mr-3" href="#">
                            {{__('Buy NOW')}}
                        </a>
                    </li>
                @endif

                <v-notifications></v-notifications>
                <li class="nav-item dropdown bg-light rounded">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mx-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle" width="24" src="{{ Auth::user()->avatar() }}">
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('dashboard.profile')}}">
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