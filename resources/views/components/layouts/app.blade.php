<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="favicon.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/perfect-scrollbar.min.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/style.css')}}" />
        <link defer rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/animate.css')}}" />
        <script src="{{asset('assets/js/perfect-scrollbar.min.js')}}"></script>
        <script defer src="{{asset('assets/js/popper.min.js')}}"></script>
        <script defer src="{{asset('assets/js/tippy-bundle.umd.min.js')}}"></script>
        <script defer src="{{asset('assets/js/sweetalert.min.js')}}"></script>

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body  x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">


        {{ $slot }}




    </body>
</html>
