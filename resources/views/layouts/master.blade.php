<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content={{csrf_token()}}>

    <title>Eventos</title>
    <link rel="stylesheet" href="/css/app.css?ver={{ filemtime(public_path('css/app.css')) }}" />
</head>

<body class="hold-transition sidebar-mini">
    @guest @yield('content') @else
    <div class="wrapper" id="app">
        <!-- Header -->
        @include('layouts.header')
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div class="content-wrapper">
            @include('layouts.top')
            <div class="content">
                <div class="clearfix"></div>
            @yield('content')
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->
    @endguest @yield('javascript')
    <script src="/js/app.js?ver={{ filemtime(public_path('js/app.js')) }}"></script>
</body>

</html>
