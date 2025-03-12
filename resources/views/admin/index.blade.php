<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<!-- Mirrored from template.codexshaper.com/admin/dashkit/component-aleart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 13:05:48 GMT -->
<head>
    @include('admin.layout.head')
    <style>
        *{
            margin : 0px;
            padding : 0px;
            box-sizing: border-box;
        }
    </style>
</head>
<body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">
<div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
    <img src="{{asset('admin/assets/pre-loader/bar-loader.gif')}}" alt="loader">
</div>
<!-- Start Header -->
    @include('admin.layout.header')
<!-- End Header -->

<!-- Start App Menu -->
    @include('admin.layout.Menu')
<!-- End App Menu -->

<!-- Start App Settings Sidebar -->
    @include('admin.layout.sidebar')
<!-- End App Settings Sidebar -->

<!-- Start Main Content -->
    @yield('main')
<!-- End Main Content -->

{{--@extends()--}}
@include('admin.layout.js')
</body>

<!-- Mirrored from template.codexshaper.com/admin/dashkit/component-aleart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 13:05:48 GMT -->
</html>
