<x-master-layout>
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{ route('settings.index') }}" class="text-muted fw-light">Settings /</a>
        @if (Route::is('settings.contact'))
            <a href="{{ route('settings.contact') }}">Contact</a>
        @elseif (Route::is('settings.about'))
            <a href="{{ route('settings.about') }}">About</a>
            @elseif (Route::is('settings.seo'))
            <a href="{{ route('settings.seo') }}">SEO</a>
        @elseif (Route::is('settings.analytics'))
            <a href="{{ route('settings.analytics') }}">Analytice</a>
        @elseif (Route::is('settings.calendly'))
            <a href="{{ route('settings.calendly') }}"> Calendly </a>
        @else
            <a href="{{ route('settings.index') }}"> General </a>
        @endif
    </h4>
    <div class="row">

        <!-- Navigation -->
        <div class="col-lg-2 col-md-3 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.index') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.index') ? 'active' : '' }}">
                            General Settings
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.about') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.about') ? 'active' : '' }}">
                            About Settings
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.contact') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.contact') ? 'active' : '' }}">
                            Contact Settings
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.seo') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.seo') ? 'active' : '' }}">
                            SEO Settings
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.analytics') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.analytics') ? 'active' : '' }}">
                            Analytics Settings
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('settings.calendly') }}"
                            class="nav-link text-capitalize {{ Route::is('settings.calendly') ? 'active' : '' }}">
                            Calendly Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Navigation -->


        <div class="col-lg-10 col-md-9 col-12">

            @if (Route::is('settings.contact'))
                @include('admin.content.settings.contact')
            @elseif (Route::is('settings.about'))
                @include('admin.content.settings.about')
                @elseif (Route::is('settings.seo'))
                @include('admin.content.settings.seo')
            @elseif (Route::is('settings.analytics'))
                @include('admin.content.settings.analytics')
            @elseif (Route::is('settings.calendly'))
                @include('admin.content.settings.calendly')
            @else
                @include('admin.content.settings.general')
            @endif

        </div>
    </div>
</x-master-layout>
