<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PLUGINS -->
@section('plugin-style') @show()
<!-- END PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ env('APP_URL') }}/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN CUSTOM SCRIPT -->
@section('custom-style') @show()
    <!-- END CUSTOM SCRIPT -->

<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{ env('APP_URL') }}/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="{{ env('APP_URL') }}/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{ env('APP_URL') }}/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
