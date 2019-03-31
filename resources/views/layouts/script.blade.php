<!--[if lt IE 9]>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/respond.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/excanvas.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PLUGINS -->
@section('plugin-script') @show()
<!-- END PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ env('APP_URL') }}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN CUSTOM SCRIPT -->
@section('custom-script') @show()
    <!-- END CUSTOM SCRIPT -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ env('APP_URL') }}/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
