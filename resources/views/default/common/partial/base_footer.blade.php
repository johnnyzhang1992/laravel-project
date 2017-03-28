<footer id="connect" class="bg-inverse p-y-3">
    <div class="container">
        <img class="img-fluid" src="{{ asset('/assets/images/home/logo-1.png') }}" style="max-width: 250px">
        <hr class="m-y-2">
        <div class="clearfix">
            <div class="pull-sm-left">
                <h3 class="m-b-1">商务联系</h3>
                <p>座机：{{ @$company->phone }}</p>
                <p>手机：{{ @$company->m_phone }}</p>
                <p class="m-b-0">邮箱：
                    @if(isset($company->email))
                        @foreach(explode(',',$company->email) as $email)
                            {{ $email }} /
                        @endforeach
                    @endif
                </p>
                <br>
                <h3>公司地址</h3>
                <p>{{ @$company->address }}</p>
                {{--<p>电商平台&nbsp;&nbsp;<a href="http://www.meetcool.1688.com">www.meetcool.1688.com</a></p>--}}
            </div>
            <div class="pull-sm-right" style="max-width: 180px;">
                <div class="hidden-sm-up m-t-2"></div>
                <img class="img-fluid" src="{{ asset('/assets/images/home/qr_code.jpg') }}">
            </div>
        </div>
        <hr class="m-y-2">
        <p class="small text-muted">{{ @$copy }}<span href="#"> {{ @$beian }}</span></p>
    </div>
</footer>