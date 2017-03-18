<!DOCTYPE html>
<html lang="Zh_cn" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ @$author or '' }}">
    <title>@yield('title') {{ @$site_title or '' }} </title>
    <meta name="keywords" content="@yield('keywords') {{ @$site_keywords or '' }}">
    <meta name="description" content="@yield('description') {{ @$site_description or '' }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ @$site_title or '' }}">
    <meta property="og:site_name" content="{{ @$site_title or '' }}">
    <meta property="og:description" content="{{ @$site_description or '' }}">
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
    @yield('css')
</head>
<body id="body" data-spy="scroll" data-target="#navbar" data-offset="">
@include('default.common.partial.nav_admin')
@yield('content')
@if(isset($site_js) && $site_js)
    <script src="{{ $site_js }}"></script>
@else
    <script src="{{ asset('js/app.js') }}"></script>
@endif
@yield('script')
</body>
</html>
