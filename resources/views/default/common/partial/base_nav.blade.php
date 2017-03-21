<nav id="navbar" class="navbar navbar-fixed-top bg-inverse navbar-dark p-x-0 p-y-1">
    <div class="container clearfix">
        <div class="navbar-brand p-y-0 m-r-0">
            <a class="logo pull-xs-left d-block" href="{{ url("/") }}">
                <img src="{{ asset('assets/images/home/logo-1.png') }}">
            </a>
            <button class="navbar-toggler hidden-md-up pull-xs-right p-y-c" type="button" data-toggle="collapse" data-target="#CollapsingNavbar"><i class="fa fa-bars"></i> MENU</button>
        </div>
        <ul class="nav navbar-nav pull-xs-right collapse navbar-toggleable-sm" id="CollapsingNavbar">
            @include('default.common.partial.top_menu')
            @if(Auth::check())
                <li class="nav-item user">
                    <a  class="nav-link" href="/admin">用户：{{ Auth::user()->name   }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">登出</a>
                </li>
            @endif
        </ul>
    </div>
</nav>