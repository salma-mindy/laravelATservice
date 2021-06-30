<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-style.css') }}">

    @livewireStyles
    <style>
        /* body{
    min-height: 2000px;
  padding-top: 70px;
   } */

    </style>
    @yield('style')
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    {{-- <a id="scrollup">Scroll</a> --}}


    @include('layouts.script')

    @livewireScripts

    @yield('script')
</body>

</html>
