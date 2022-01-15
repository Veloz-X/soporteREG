<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
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
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div> 
    <div class="scrollbar-sidebar pt-2">
        <div class="app-sidebar__inner scrollbar-container">
            <ul class="vertical-nav-menu">

                @foreach (backendMenu('sidebar') as $item)
                    @if(count($item['permissions']) != 0 )
                        @cannot($item['permissions'])
                            @continue
                        @endcan
                    @endif

                    <li  @if($item['sub_items']) class="has-child collapse show" @endif >

                        @if($item['sub_items'])
                            
                            <a class="collapsed text-truncate item-header" href="#item-{{ $item['name'] }}" data-toggle="collapse">
                                <i class="{{ $item['icon'] }}"></i>
                                <span>{{ __($item['name']) }}</span>
                            </a>
                            
                        @else
                            @if( isset($item['vue_route']) )
                            <a href="{{ route('dashboard').$item['vue_route'] }}">
                                <i class="{{ $item['icon'] }}"></i>
                                <span>{{ __($item['name']) }}</span>
                            </a>
                            @else
                            <a 
                                href="@if($item['route']) {{route($item['route'])}} @else {{$item['route']}}@endif"
                                @if($item['target']) target="{{ $item['target'] }}" @endif >
                                <i class="{{ $item['icon'] }}"></i>
                                <span>{{ __($item['name']) }}</span>
                            </a>
                            @endif
                        @endif

                        @if($item['sub_items'])

                        <ul class="collapse" id="item-{{ $item['name'] }}" aria-expanded="false">
                            <li>
                            <a 
                            href="@if($item['route']) {{route($item['route'])}} @else {{$item['route']}}@endif"
                            @if($item['target']) target="{{ $item['target'] }}" @endif
                            >
                            <i class="{{ $item['icon'] }}"></i>
                            <span> @if(isset($item['label'])) {{ __($item['name']) }}@else {{ __($item['name']) }} @endif </span>
                             </a>
                            </li>
                       
                        @foreach ($item['sub_items'] as $subitem)
                            @if(count($subitem['permissions']) != 0 )
                                @cannot($subitem['permissions'])
                                    @continue
                                @endcan
                            @endif
                            <li>
                            <a 
                                href="@if($subitem['route']) {{route($subitem['route'])}} @else {{$subitem['route']}}@endif"
                                @if($subitem['target']) target="{{ $subitem['target'] }}" @endif
                                >
                                <i class="{{ $subitem['icon'] }}"></i>
                                <span>{{ __($subitem['name']) }}</span>
                            </a>
                            </li>
                        @endforeach
                        </ul>
                        @endif
                        
                    </li>
                @endforeach

                <li>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>