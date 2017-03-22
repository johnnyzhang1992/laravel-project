<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="{{ url('/admin') }}">
                    <img src="{{ asset('assets/img/ui-sam.jpg') }}" class="img-circle" width="60"></a>
            </p>
            <h5 class="centered">MeetCool</h5>
            <li class="mt">
                <a  href="/admin">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{ url('/admin/seo') }}" class="set-list">
                    <i class="fa fa-cogs"></i>
                    <span>网站配置</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ url('/admin/seo') }}" class="set-seo">SEO 设置</a></li>
                    <li><a  href="{{ url('/admin/company') }}" class="set-info">公司信息</a></li>
                    {{--<li><a  href="#" class="set-copy">Copy Right</a></li>--}}
                </ul>
            </li>

            <li class="sub-menu pro-list">
                <a href="javascript:;" >
                    <i class="fa fa-shopping-bag"></i>
                    <span>产品管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">产品编辑</a></li>
                    <li><a  href="#">产品添加</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->