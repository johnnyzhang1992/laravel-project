@extends('default.common.layout.base')

@section('title','米酷科技-首页')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="overview" class="overview p-y-2">
        <div class="empty"></div>
        <div class="container">
            <div class="row">
                <div class="overview-content col-md-10 col-md-offset-1 col-xs-12">
                    <hgroup>
                        <img src="{{ asset('/assets/images/common/enlogo.svg') }}" class="d-block p-x-c p-x-2">
                        <p class="text-muted">
                            Meetcool.Vip 品牌由我司米酷科技注册成立，公司专注于高品质的数码产品的研发与生产，
                            为广大中小商家及消费者提供质优价良的产品与服务。目前，米酷可以已于数十家工厂、品牌商
                            简历战略合作关系，共同研发、生产数码产品，现公司产品涵盖手机钢化膜（曲面膜）、蓝牙音箱蓝牙耳机（耳机）、
                            键盘鼠标、数据线材、U盘、移动电源、智能手表（儿童/老人智能手表）、儿童早教产品等。
                        </p>
                        <p class="text-muted m-b-0">
                            米酷可以寄愿与全国各地及国内外合作商家一道，共享优势与市场资源，将产品市场做大做强，也诚挚欢迎各区域商家
                            加入我们米酷科技，我们将为您提供良好的产品与服务。
                        </p>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="empty"></div>
    </section>
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