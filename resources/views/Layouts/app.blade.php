<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Many Tutorials.">
    <meta name="author" content="Lathindu Pramuditha">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tutorials</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
    @include('Libraries.styles')
</head>

<body>
    <!-- Sidenav -->
    @include('Components.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('Components.nav')
        <!-- Header -->
        @yield('header')
        <!-- Header -->
        <div class="container-fluid mt--6" style="min-height:60vh;">
            @yield('content')
            <!-- Page content -->
        </div>
        <div class="container-fluid">
            @include('Components.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    @include('Libraries.scripts')
</body>

</html>
