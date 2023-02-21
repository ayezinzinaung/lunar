<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Lunar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
  
<link href={{asset('backend/css/main.css')}} rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @include('backend.layouts.header')
            <div class="app-main">
            
        @include('backend.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                        @yield('content')
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <span>Copyright {{ date('Y') }}, All right reserved by Lunar.</span>
                            </div>

                            <div class="app-footer-right">
                                <span>Devloped by Aye Zin Zin Aung.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        
    </div>
<script src={{asset('backend/js/main.js')}}></script></body>
</html>
