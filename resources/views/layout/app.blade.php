<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @if(0)
            <link rel="stylesheet" href="{{asset('css/libs/bootstrap5.1.3/bootstrap.rtl.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/sidebar/sidebar.rtl.css')}}">

        @else
            <link rel="stylesheet" href="{{asset('css/libs/bootstrap5.1.3/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/sidebar/sidebar.css')}}">
        @endif
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @yield('css')
    </head>
    <body>
        <div class="container_app">
            <div class="header_content">
                @include('layout.header')
            </div>
           <div class="contact">
               <div class="main main_col">
                   @yield('content')
               </div>
               @include('layout.side_menu')
           </div>
{{--           <footer> footer</footer>--}}
        </div>
        <script src="{{asset('js/libs/jquery/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/libs/bootstrap5.1.3/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/sidebar/script.js')}}"></script>
        @yield('js')
    </body>
</html>
