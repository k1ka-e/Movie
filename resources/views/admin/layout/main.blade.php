<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
        content="A fully featured admin theme which can be used to build CRM, CMS, etc."
        name="description"
    />
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets_admin/images/favicon.ico')}}"/>

    <!-- Plugins css -->
    <link href="{{asset('assets_admin/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets_admin/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets_admin/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets_admin/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets_admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!-- Plugins css -->
    <link href="{{asset('assets_admin/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_admin/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{asset('assets_admin/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets_admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link
        href="{{asset('assets_admin/css/config/default/bootstrap.min.css')}}"
        rel="stylesheet"
        type="text/css"
        id="bs-default-stylesheet"
    />
    <link
        href="{{asset('assets_admin/css/config/default/app.min.css')}}"
        rel="stylesheet"
        type="text/css"
        id="app-default-stylesheet"
    />

    <link
        href="{{asset('assets_admin/css/config/default/bootstrap-dark.min.css')}}"
        rel="stylesheet"
        type="text/css"
        id="bs-dark-stylesheet"
        disabled="disabled"
    />
    <link
        href="{{asset('assets_admin/css/config/default/app-dark.min.css')}}"
        rel="stylesheet"
        type="text/css"
        id="app-dark-stylesheet"
        disabled="disabled"
    />

    <!-- icons -->
    <link href="{{asset('assets_admin/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var $j = jQuery.noConflict();
    </script>
</head>

<!-- body start -->
<body
    class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'
>
<!-- Begin page -->
<div id="wrapper">

    <!-- Main Sidebar Container -->
@include('admin.include.sidebar')

<!-- Main Content Container -->
@yield('content')

<!-- Main Footer Container -->
@include('admin.include.footer')

<!-- Vendor js -->
    <script src="{{asset('assets_admin/js/vendor.min.js')}}"></script>

    <script src="{{asset('assets_admin/libs/selectize/js/standalone/selectize.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/mohithg-switchery/switchery.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets_admin/libs/select2/js/select2.min.js')}}></script>
    <script src="{{asset('assets_admin/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('assets_admin/libs/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/dropify/js/dropify.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets_admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('assets_admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


    <!-- Init js-->
    <script src="{{asset('assets_admin/js/pages/form-advanced.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets_admin/js/app.min.js')}}"></script>
</body>
</html>
