<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{ asset('admin/images/logo.png') }}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('admin/images/logo.png') }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css/animate.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/glyphicons/glyphicons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/material-design-icons/material-design-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/ionicons/css/ionicons.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/simple-line-icons/css/simple-line-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/toast/jquery.toast.css') }}" type="text/css" />

    <!-- build:css css/styles/app.min.css -->
    <link rel="stylesheet" href="{{ asset('admin/css/styles/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/css/styles/style.css') }}" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="{{ asset('admin/css/styles/font.css') }}" type="text/css" />

    <!-- jQuery -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk5FCo6Gu-bx20oMbNNHcgrhoh7_w3Lmk&sensor=false"></script>

    <script src="{{ asset('admin/js/jquery.toast.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <!-- Custom Js -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>

</head>
<body class="pace-done black">
<div class="app" id="app">
    <!-- ############ LAYOUT START-->
    <!-- aside -->
    @include('admin.includes.aside-super-admin')
    <!-- / -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
        @include('admin.includes.header')
        @include('admin.includes.footer')
        <div class="app-body">
            <div class="padding">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- / -->
    @yield('script')
    <!-- ############ LAYOUT END-->
</div>

<!-- build:js scripts/app.min.js -->

<!-- Bootstrap -->
<script src="{{ asset('admin/libs/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
<script src="{{ asset('admin/libs/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
<script src="{{ asset('admin/libs/PACE/pace.min.js') }}"></script>
<script src="{{ asset('admin/libs/jquery-pjax/jquery.pjax.js') }}"></script>
<script src="{{ asset('admin/libs/blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('admin/libs/jscroll/jquery.jscroll.min.js') }}"></script>

<script src="{{ asset('admin/scripts/config.lazyload.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-load.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-jp.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-include.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-device.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-form.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-modal.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-nav.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-list.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-screenfull.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-scroll-to.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-toggle-class.js') }}"></script>
<script src="{{ asset('admin/scripts/ui-taburl.js') }}"></script>
<script src="{{ asset('admin/scripts/app.js') }}"></script>
<script src="{{ asset('admin/scripts/ajax.js') }}"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('admin/js/script.js') }}"></script>

<script src="{{ asset('admin/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin/laravel-ckeditor/adapters/jquery.js') }}"></script>

<!-- endbuild -->
</body>
</html>
