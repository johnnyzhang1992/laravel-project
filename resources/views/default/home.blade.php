@extends('default.common.layout.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    {{--首屏banner--}}
    <section id="overview" class="fullscreen bg-cover bg-fixed p-a-c"  style="position: relative;">

        <div class="container text-xs-center">
            <img src="{{ asset('/assets/images/home/logo-1.png') }}" class="img-fluid" style="max-width: 300px">
            <h1 class="h3">三星S8曲面全覆盖钢化膜<br></h1>
        </div>
    </section>
    {{--介绍--}}
    <section id="intro" class="overview p-y-2">
        <div class="empty"></div>
        <div class="container">
            <div class="row">
                <div class="overview-content col-md-10 col-md-offset-1 col-xs-12">
                    <hgroup>
                        <img src="{{ asset('/assets/images/home/logo.png') }}" class="d-block p-x-c p-x-2">
                        {!! @$company->intro !!}
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="empty"></div>
    </section>
    {{--产品--}}
    <section id="members" class="members bg-faded bg-fixed ng-cover members-bg-cover">
        <div class="empty"></div>
        <div class="container clearfix">
            <div class="text-xs-center">
                <h2 class="m-b-1">部分热销产品</h2>
                <p class="text-muted m-b-0">成为我们的合作伙伴，放心采购优质产品，共赢广阔的数码市场</p>
            </div>
            <div class="card-columns m-t-3 text-xs-center col-md-10 col-md-offset-1 col-xs-12 clearfix">
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">(手机)钢化膜</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/ganghuamo.jpg') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">(手机)保护壳</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/baohuke.jpg') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">键盘鼠标</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/shubiao.jpg') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">数据线材</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/shujuxian.jpg') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">U 盘/存储卡</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/upan.gif') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">移动电源</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/yidongdianyuan.jpg') }}">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">(儿童)智能手表</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/zhinengshoubiao.jpg') }}" title="智能手表">
                    </a>
                </div>
                <div class="card card-block">
                    <a class="d-inline-block" href="javascript:void(0)">
                        <p class="card-text text-muted">早教产品</p>
                        <img class="m-b-1 w-100" src="{{ asset('/assets/images/home/pro/zaojiaoji.jpg') }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="empty"></div>
    </section>
@endsection


@section('script')
    <script>
        console.log("**********************************************");
        console.log('建站请联系：me@johnnyzhang.cn');
        console.log("**********************************************");
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