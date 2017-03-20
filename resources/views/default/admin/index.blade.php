@extends('default.common.layout.admin')

@section('title','米酷-遇见更好的你')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <style>
        html, body {
            color: #505050;
            height: auto;
            position: relative;
            font-family: NotoSansHans-Regular, AvenirNext-Regular, arial, Hiragino Sans GB, "Microsoft Yahei", "Hiragino Sans GB", "WenQuanYi Micro Hei", sans-serif;
        }
        #navbar{
            padding: 15px 0;
            line-height: 50px;
            margin-bottom: 0;
        }
        .dropdown-toggle{
            background: #202020;
            color: #fff;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            border: 1px solid #fff;
            text-align: center;
            min-width: 160px;
            padding: 6px 12px!important;
            line-height: 25px!important;
        }
        .dropdown-menu{
            background: #202020;
        }
        .dropdown-menu>li {
            line-height: 30px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="content" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="left-menu col-lg-3 col-md-4 col-sm-4 com-xs-5">
                    <ul class="menu-list">
                        <li><a href="">网站设置</a></li>
                        <li><a href="">轮播设置</a></li>
                        <li><a href="">产品管理</a></li>
                    </ul>
                </div>
                <div class="right-content col-lg-9 col-md-8 col-sm-8 col-xs-7">
                    <div id="site-config">
                        网站设置
                    </div>
                    <div id="banner">
                        轮播设置
                    </div>
                    <div id="product">
                        产品管理
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection