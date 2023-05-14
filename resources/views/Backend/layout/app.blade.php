<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend/assets/images/demo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/demo.png') }}" type="image/x-icon">
    <title> CMS </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">
    @stack('style')
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('backend.layout.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('backend.layout.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">

                <!-- Container-fluid starts-->
                @stack('main')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('backend.layout.footer')
        </div>
    </div>

    <!-- latest jquery-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/scrollbar/simplebar.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/sidebar-menu.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/prism/prism.min.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/clipboard/clipboard.min.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/custom-card/custom-card.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/typeahead/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/typeahead-search/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="http://admin.pixelstrap.com/zeta/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="http://admin.pixelstrap.com/zeta/assets/js/script.js"></script>
    <script src="{{asset('backend/assets/js/themecustomizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->

    @stack('script')
</body>

</html>
