<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        @section('tab-title') @show()
        @include('layouts.header')
        @include('layouts.style')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        {{-- <div class="page-wrapper"> --}}
            <!-- BEGIN HEADER -->
            @include('layouts.nav-top')
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    @include('layouts.nav-left')
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        @section('page-content') @show()
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include('layouts.footer')
            <!-- END FOOTER -->
        {{-- </div> --}}
        @include('layouts.script')
        {{-- <script type="text/javascript">
            var idleTime = 60000;
            var host = '{{ env('APP_URL') }}';
            $(document).ready(function () {
                //Increment the idle time counter every minute.
                var idleInterval = setInterval(timerIncrement, 60000); // 5 minute

                //Zero the idle timer on mouse movement.
                $(this).mousemove(function (e) {
                    idleTime = 0;
                });
                $(this).keypress(function (e) {
                    idleTime = 0;
                });
            });

            function timerIncrement() {
                idleTime = idleTime + 1;
                if (idleTime > 19) { // 20 minutes
                    window.location.href = host+ '/lockscreen';
                }
            }
        </script> --}}
    </body>

</html>
