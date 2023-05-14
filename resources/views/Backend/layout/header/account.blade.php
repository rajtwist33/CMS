<li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
    <div class="media profile-media">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g>
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </g>
        </svg>
    </div>
    <ul class="profile-dropdown onhover-show-div">
        <li><a href="{{route('profile.edit')}}"><i data-feather="user"></i><span>Account </span></a></li>
        <li><a href="{{route('admin.settings.create')}}"><i data-feather="settings"></i><span>Settings</span></a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <i data-feather="log-Out"> </i><button type="submit" class="btn btn-primary ">Log Out</button>
            </form>
            <a href="{{url('/logout')}}"></a></li>
    </ul>

</li>
