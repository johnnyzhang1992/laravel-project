@extends('default.common.layout.base')

@section('title','米酷-遇见更好的你')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    {{--首屏banner--}}
    <section id="overview" class="fullscreen bg-cover bg-fixed p-a-c"  style="position: relative;">

        <div class="container text-xs-center">
            <img src="{{ asset('/assets/images/home/logo-1.png') }}" class="img-fluid" style="max-width: 300px">
            <h1 class="h3">三星S8曲面全覆盖钢化膜<br></h1>
            {{--<ul class="overview-key clearfix">--}}
                {{--<li><span>9H硬度</span></li>--}}
                {{--<li><span>高清透</span></li>--}}
                {{--<li><span>曲面<br>全屏覆盖</span></li>--}}
                {{--<li><span>3D曲面</span></li>--}}
            {{--</ul>--}}
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
                        <p class="text-muted text-indent">
                            Meetcool.Vip 品牌由深圳米酷科技注册成立，公司专注高品质的数码产品的研发与生产，
                            为广大中小商家及消费者提供质优价良的产品服务。目前，米酷科技与数十家工厂、品牌商
                            建立战略合作关系，共同研发、生产数码产品，现公司产品涵盖手机钢化膜（曲面膜）、蓝牙音箱（蓝牙）耳机、
                            键盘鼠标、数据线材、U盘、移动电源、智能手表（儿童/老人智能手表）、儿童早教产品等智能产品。
                        </p>
                        <p class="text-muted m-b-0 text-indent">
                            米酷科技愿与国内外商家一道，共享优势产品与市场资源，将市场做大做强，也诚挚欢迎各区域商家
                            和我们建立合作关系，我们将为您提供良好的产品与服务。
                        </p>
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
        console.info('建站请联系：me@johnnyzhang.cn');
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