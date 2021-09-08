<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" type="image/png" href="#">

    <!-- Core Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap-slider.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body class="mCustomScrollbar _mCS_2">

    <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
        <div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
            <div class="overlay-background"></div>
            <!-- ########## START: Setting Box ########## -->
            <div class="theme-setting-wrapper">
                <button type="button" id="settings-trigger" class="btn btn-primary waves-effect waves-primary">
                    <i class="la la-cog"></i>
                </button>
                <div class="theme-setting-sidebar">
                    <div class="h-100">
                        <div class="mt-4 d-flex align-items-center flex-wrap px-4">
                            <h4 class="font-weight-bold">THEME CUSTOMIZER</h4>
                            <small>Customize &amp; Preview in Real Time</small>
                        </div>
                        <hr>
                        <div class="theme-setting-sidebar-scroll">
                            <div class="px-4">
                                <div>
                                    <h5 class="mb-2">Dark Mode</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="radio theme-radio mr-4">
                                            <input type="radio" id="light" name="light" value="theme-light">
                                            <label for="light">Light</label>
                                        </div>
                                        <div class="radio theme-radio mr-4">
                                            <input type="radio" id="dark" name="light" value="theme-dark">
                                            <label for="dark">Dark</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            @include('backend.inc.admin-sidebar')

            @include('backend.inc.admin-nav')

            @yield('content')

            


            <script src="{{asset('admin_assets/scripts/jquery.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/popper.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/bootstrap-slider.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/bootstrap.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/bootstrap-select.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/bootstrap-tooltip-custom-class.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/jquery.mCustomScrollbar.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/Chart.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/dashboard.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/datatables.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/ripple.min.js')}}"></script>
            <script src="{{asset('admin_assets/scripts/custome.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        </div>

        <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
            <div class="mCSB_draggerContainer">
                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 77px; max-height: 498px; top: 0px;">
                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                </div>
                <div class="mCSB_draggerRail"></div>
            </div>
        </div>
    </div>
</body>


</html>