<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                        src="{{ asset('backend/assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar">
                <div class="status_toggle sidebar-toggle d-flex">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z"
                                    stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z"
                                    stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z"
                                    stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z"
                                    stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="left-side-header col ps-0 d-none d-md-block">
            <div class="input-group"><span class="input-group-text" id="basic-addon1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.2753 2.71436C16.0029 2.71436 19.8363 6.54674 19.8363 11.2753C19.8363 16.0039 16.0029 19.8363 11.2753 19.8363C6.54674 19.8363 2.71436 16.0039 2.71436 11.2753C2.71436 6.54674 6.54674 2.71436 11.2753 2.71436Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.8987 18.4878C20.6778 18.4878 21.3092 19.1202 21.3092 19.8983C21.3092 20.6783 20.6778 21.3097 19.8987 21.3097C19.1197 21.3097 18.4873 20.6783 18.4873 19.8983C18.4873 19.1202 19.1197 18.4878 19.8987 18.4878Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </g>
                    </svg></span>
                <input class="form-control" type="text" placeholder="Search here" aria-label="search"
                    aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
            <ul class="nav-menus">
              @include('backend.layout.header.darkmode')
                @include('backend.layout.header.notification')
                @include('backend.layout.header.expand')
                @include('backend.layout.header.account')


            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
        <div class="ProfileCard u-cf">
        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
        <div class="ProfileCard-details">
        <div class="ProfileCard-realName"></div>
        </div>
        </div>
      </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
