<!DOCTYPE html>
<html lang="Zh_cn" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ @$author}}">
    <title>@yield('title') {{ @$site_title}} </title>
    <meta name="keywords" content="@yield('keywords') {{ @$site_keywords}}">
    <meta name="description" content="@yield('description') {{ @$site_description}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ @$site_title}}">
    <meta property="og:site_name" content="{{ @$site_title}}">
    <meta property="og:description" content="{{ @$site_description}}">
    <meta name="theme-color" content="#52768e">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}"/>
    {{--<link rel="stylesheet" href="{{ asset('/css/common.css') }}">--}}
    @if(isset($site_css) && $site_css)
        <link href="{{ $site_css }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('/css/manage/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/manage/style-responsive.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body id="body" data-spy="scroll" data-target="#navbar" data-offset="">
@include('default.common.partial.nav_admin')
<section id="container" >
    @if(Auth::check())
        @include('default.admin.partial.left_menu')
    @endif

    @yield('content')
    {{--@include('default.admin.partial.footer')--}}
</section>
@if(isset($site_js) && $site_js)
    <script src="{{ $site_js }}"></script>
@else
    <script src="{{ asset('js/app.js') }}"></script>
@endif
<script src="{{ asset('js/manage/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('/js/manage/jquery.ui.touch-punch.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('/js/manage/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('/js/manage/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/manage/jquery.nicescroll.js') }}" type="text/javascript"></script>

<!--common script for all pages-->
<script src="{{ asset('/js/manage/common-scripts.js') }}"></script>
@yield('script')
</body>
</html>
