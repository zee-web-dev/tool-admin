<x-master-layout>
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{ route('sections.index') }}" class="text-muted fw-light">Sections /</a>

        @if (Route::is('sections.about'))
            <a href="{{ route('sections.about') }}">About</a>
        @elseif (Route::is('sections.services'))
            <a href="{{ route('sections.services') }}">Services</a>
        @else
            <a href="{{ route('sections.index') }}"> Header </a>
        @endif
    </h4>
    <div class="row">

        <!-- Navigation -->
        <div class="col-lg-2 col-md-3 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('sections.index') }}"
                            class="nav-link text-capitalize {{ Route::is('sections.index') ? 'active' : '' }}">
                            Header Sections
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('sections.about') }}"
                            class="nav-link text-capitalize {{ Route::is('sections.about') ? 'active' : '' }}">
                            About Sections
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('sections.services') }}"
                            class="nav-link text-capitalize {{ Route::is('sections.services') ? 'active' : '' }}">
                            Services Sections
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /Navigation -->


        <div class="col-lg-10 col-md-9 col-12">


            @if (Route::is('sections.about'))
                @include('admin.content.section.about')
            @elseif (Route::is('sections.services'))
                @include('admin.content.section.services')
            @else
                @include('admin.content.section.header')
            @endif

        </div>
    </div>
</x-master-layout>
