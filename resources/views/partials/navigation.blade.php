<div class="menu-w color-scheme-light color-style-default menu-position-top menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-bright menu-activated-on-hover menu-has-selected-link">
    <div class="logo-w">
        <a class="logo" href="/home">
            <div class="logo-element"></div>
            <div class="logo-label">
                Vereinsmanager
            </div>
        </a>
    </div>
    <h1 class="menu-page-header">
        Page Header
    </h1>
    {{ menu('Frontend', 'partials.menu') }}
    @if(isset(\Auth::user()->name))
        <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="/assets/img/avatar1.jpg">
                </div>
                <div class="logged-user-info-w">
                    <div class="logged-user-name">
                        {{ Auth()->user()->name }}
                    </div>
                    <div class="logged-user-role">
                        Administrator
                    </div>
                </div>
                <div class="logged-user-toggler-arrow">
                    <div class="os-icon os-icon-chevron-down"></div>
                </div>
                <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="/assets/img/avatar1.jpg">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{ Auth()->user()->name }}
                            </div>
                            <div class="logged-user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="{{ route('users.profile') }}"><i class="os-icon os-icon-user-male-circle2"></i><span>Einstellungen</span></a>
                        </li>
                        <li>
                            <a href="{{ route('users.billing') }}"><i class="os-icon os-icon-coins-4"></i><span>Zahlungsdaten</span></a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </div>
            </div>
        </div>
    @endif
</div>