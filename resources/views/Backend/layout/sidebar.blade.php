<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{route('dashboard')}}">
                <img class="img-fluid for-light" src="{{ asset('backend/assets/images/demo.png') }}" alt="">
                <img class="img-fluid for-dark" src="{{ asset('backend/assets/images/demo.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{route('dashboard')}}"><img class="img-fluid" src="{{ asset('backend/assets/images/demo.png') }}"
                    alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{route('dashboard')}}">
                            <img class="img-fluid"src="{{ asset('backend/assets/images/logo-icon.png') }}"
                                alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true">
                            </i>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.75024 12C2.75024 5.063 5.06324 2.75 12.0002 2.75C18.9372 2.75 21.2502 5.063 21.2502 12C21.2502 18.937 18.9372 21.25 12.0002 21.25C5.06324 21.25 2.75024 18.937 2.75024 12Z"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M15.2045 13.8999H15.2135" stroke="#130F26" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.2045 9.8999H12.2135" stroke="#130F26" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.19557 13.8999H9.20457" stroke="#130F26" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg><span class="lan-6">Widgets</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="general-widget.html">General</a></li>
                            <li><a href="chart-widget.html">Chart</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
