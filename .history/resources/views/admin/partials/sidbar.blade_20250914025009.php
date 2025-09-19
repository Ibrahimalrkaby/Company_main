<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{ __('keywords.home') }}</span>
                </a>
            </li>

            <p class="text-muted nav-heading mt-4 mb-1">
                <span>{{ __('keywords.component') }}</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.service.index') }}" icon="fe-codesandbox"
                    name="{{ __('keywords.service') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.feature.index') }}" icon="fe-bookmark"
                    name="{{ __('keywords.feature') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.message.index') }}" icon="fe-message-square"
                    name="{{ __('keywords.message') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.subscriber.index') }}" icon="fe-bell"
                    name="{{ __('keywords.subscriber') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.testimonial.index') }}" icon="fe-message-circle"
                    name="{{ __('keywords.testimonial') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.company.index') }}" icon="fe-pie-chart"
                    name="{{ __('keywords.company') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.member.index') }}" icon="fe-users"
                    name="{{ __('keywords.member') }}"></x-sidebar-tab>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-sidebar-tab href="{{ route('admin.setting.index') }}" icon="fe-settings"
                    name="{{ __('keywords.setting') }}"></x-sidebar-tab>
            </ul>
    </nav>
</aside>
