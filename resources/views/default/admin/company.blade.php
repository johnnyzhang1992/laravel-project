@extends('default.common.layout.admin')

@section('title','米酷-遇见更好的你')

@section('css')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('/css/summernote.css') }}">
    <style>
        #setting-form{
            background: #fff;
            padding: 20px;
        }
        .widget .widget-header {
            padding: 10px 20px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            color: #333;
            border-bottom: 1px solid #ddd;
            background-color: #F5F8FA;
        }
        .widget .widget-body{
            padding: 30px 20px;
            overflow-x: auto;
        }
    </style>
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h4>公司信息 &gt; </h4>
            <div class="row mt">
                <div class="col-lg-12">
                    <form role="form" id="setting-form" class="form-horizontal" action="{{ url('/admin/company/update') }}" method="post">
                        <div class="widget widget-default">
                            <div class="widget-header">
                                <h6>
                                    <i class="fa fa-cog fa-fw"></i>设置
                                </h6>
                            </div>
                            <div class="widget-body">
                                <div class="form-group">
                                    <label for="author" class="col-sm-2 control-label">电话</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="电话" value="{{ @$company->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">手机号</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="m_phone" placeholder="手机号码" value="{{ @$company->m_phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">邮箱</label>
                                    <div class="col-sm-8">
                                        <input placeholder="电子邮箱" class="form-control" type="text" name="email" value="{{ @$company->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">联系地址</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="address" placeholder="联系地址" value="{!! @$company->address !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">公司介绍</label>
                                    <div class="col-sm-8">
                                        <textarea class="summernote form-control"  name="intro">{!! @$company->intro !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">公司介绍-logo</label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-4">
                                            <img src="{{ url(@$company->intro_logo) }}" alt="" class="img-responsive">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <form action="">
                                                <label for="intro_logo" class="control-label col-sm-3">上传图片:</label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button type="submit" class="btn bg-primary">
                                            保存
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section><

@endsection

@section('script')
    <script src="{{ asset('/js/summernote.min.js') }}"></script>
    {{--<!--script for this page-->--}}
    <script>
        $('.summernote').summernote({
            height: 100 ,
            placeholder: '请输入内容...'
        });
        $('.set-list').addClass('active');
        $('.set-info').addClass('active');
    </script>
@endsection