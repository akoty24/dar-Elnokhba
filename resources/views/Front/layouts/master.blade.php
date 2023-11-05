<!doctype html>
<html lang="en" dir="ltr" class="landing-pages">
@include('Front.includes.header')
<body class=" body-bg landing-pages">
<span class="screen-darken"></span>
<!-- loader Start -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body">
            <img src="{{asset('front/assets/images/loader.gif')}}" alt="loader" class="light-loader img-fluid " width="200">
        </div>
    </div>
</div>
<!-- loader END -->
<main class="main-content">
    @include('Front.includes.head')

    @yield('content')
</main>
@include('Front.includes.footer')
<!-- Library Bundle Script -->
<script src="{{asset('front/assets/js/core/libs.min.js')}}"></script>
<!-- Plugin Scripts -->
@include('Front.layouts.footer_script')
</body>
</html>
