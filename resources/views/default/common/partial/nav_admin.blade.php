<nav id="navbar" class="navbar bg-inverse navbar-dark p-x-0 p-y-1">
    <div class="container clearfix">
        <div class="navbar-brand p-y-0 m-r-0">
            <a class="logo pull-xs-left d-block" href="{{ url("/") }}">
            <img src="{{ asset('assets/images/home/logo-1.png') }}">
            </a>
            <button class="navbar-toggler hidden-md-up pull-xs-right p-y-c" type="button" data-toggle="collapse" data-target="#CollapsingNavbar"><i class="fa fa-bars"></i> MENU</button>
        </div>
        <ul class="nav navbar-nav pull-xs-right collapse navbar-toggleable-sm" id="CollapsingNavbar">
            @if(Auth::guest())
            <li class="nav-item user">
                <a  class="nav-link" href="/register">注册</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">登录</a>
            </li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="">
                        <span>{{ Auth::user()->name }}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/">回到站点</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                退出登录
                            </a>
                        </li>
                        <form id="logout-form" action="http://johnnyzhang.cn/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="ppAoXHcmhMaotuLg5Iwd4D0oSq4dMIjKwgsHS7ti">
                        </form>
                    </ul>
                </li>
            @endif
        </ul>

    </div>
</nav>