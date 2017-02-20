@extends('default.common.layout.base')

@section('title','米酷科技-首页')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection


@section('script')
    <script>
        $(function() {
            // collapse
            $('.navbar-nav').on('shown.bs.collapse', function () {
                $(this).find('.nav-link').click(function () {
                    $('.navbar-nav').collapse('toggle');
                });
            });
        });
    </script>
@endsection