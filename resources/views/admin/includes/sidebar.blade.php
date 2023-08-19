@php
    $url = url()->full();
@endphp
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> -->
                        <span>Focus</span></a>
                </div>

                {{-- Foreach menu item starts --}}
                @if (isset($menuData))
                    @foreach ($menuData->menu as $menu)
                        @if (isset($menu->navheader))
                            <li class="label">
                                {{ $menu->navheader }}
                            </li>
                        @else
                            {{-- Add Custom Class with nav-item --}}
                            @php
                                $custom_classes = '';
                                if (isset($menu->classlist)) {
                                    $custom_classes = $menu->classlist;
                                }
                            @endphp
                            <li
                                class="{{ Route::currentRouteName() === $menu->slug ? 'active' : '' }} {{ $custom_classes }}">
                                <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0)' }}"
                                    class="{{ isset($menu->submenu) ? 'sidebar-sub-toggle' : '' }}"
                                    target="{{ isset($menu->newTab) ? '_blank' : '_self' }}">
                                    <i class="ti-{{ $menu->icon }}"></i>
                                    {{ $menu->name }}
                                    @if (isset($menu->badge))
                                        <span
                                            class="{{ isset($menu->badgeClass) && !empty($menu->badgeClass)   ? $menu->badgeClass : 'badge badge-primary' }} ">
                                            {{ $menu->badge }}</span>
                                    @endif
                                    @if (isset($menu->submenu))
                                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                                    @endif

                                </a>
                                @if (isset($menu->submenu))
                                    <ul>
                                        @foreach ($menu->submenu as $submenu)
                                            <li>
                                                <a href="{{ $submenu->url }}"
                                                    class="{{ Route::currentRouteName() === $menu->slug ? 'active' : '' }}">{{ $submenu->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                @endif
                {{-- Foreach menu item ends --}}

                {{-- <li class="label">Main</li>
                <li>
                    <a class="sidebar-sub-toggle">
                        <i class="ti-home"></i> Dashboard
                        <span class="badge badge-primary">2</span>
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index1.html">Dashboard 2</a></li>
                    </ul>
                </li>

                <li class="label">Apps</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Charts <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chartjs.html">Chartjs</a></li>
                        <li><a href="chartist.html">Chartist</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>
                        <li><a href="chart-sparkline.html">Sparkle</a></li>
                        <li><a href="chart-knob.html">Knob</a></li>
                    </ul>
                </li>
                <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                <li class="label">Features</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>

                        <li><a href="ui-button.html">Button</a></li>
                        <li><a href="ui-dropdown.html">Dropdown</a></li>

                        <li><a href="ui-list-group.html">List Group</a></li>

                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>

                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Components <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="uc-calendar.html">Calendar</a></li>
                        <li><a href="uc-carousel.html">Carousel</a></li>
                        <li><a href="uc-weather.html">Weather</a></li>
                        <li><a href="uc-datamap.html">Datamap</a></li>
                        <li><a href="uc-todo-list.html">To do</a></li>
                        <li><a href="uc-scrollable.html">Scrollable</a></li>
                        <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="uc-toastr.html">Toastr</a></li>
                        <li><a href="uc-range-slider-basic.html">Basic Range Slider</a></li>
                        <li><a href="uc-range-slider-advance.html">Advance Range Slider</a></li>
                        <li><a href="uc-nestable.html">Nestable</a></li>

                        <li><a href="uc-rating-bar-rating.html">Bar Rating</a></li>
                        <li><a href="uc-rating-jRate.html">jRate</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="table-basic.html">Basic</a></li>

                        <li><a href="table-export.html">Datatable Export</a></li>
                        <li><a href="table-row-select.html">Datatable Row Select</a></li>
                        <li><a href="table-jsgrid.html">Editable </a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="font-themify.html">Themify</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="gmaps.html">Basic</a></li>
                        <li><a href="vector-map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="label">Form</li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                <li class="label">Extra</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="invoice.html">Basic</a></li>
                        <li><a href="invoice-editable.html">Editable</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-reset-password.html">Forgot password</a></li>
                    </ul>
                </li>
                <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
                <li><a><i class="ti-close"></i> Logout</a></li> --}}
            </ul>
        </div>
    </div>
</div>
