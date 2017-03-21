<!--header start-->
<header class="header black-bg" style="top: 0;">
    @if(Auth::check())
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
    @endif
    <!--logo start-->
    <a href="/admin" class="logo"><b>DASHGUM MEETCOOL</b></a>
    <!--logo end-->
    <div class="nav">
        <ul class="nav pull-right top-menu">
            @if(Auth::check())
                <li><a class="logout" href="#">{{ Auth::user()->name }}</a></li>
                <li><a class="logout" href="{{ url('/logout') }}">登出</a></li>
            @else
                <li><a class="logout" href="{{ url('/register') }}">注册</a></li>
                <li><a class="logout" href="{{ url('/login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</header>
<!--header end-->