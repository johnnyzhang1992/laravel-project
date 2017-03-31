@extends('default.common.layout.admin')

@section('title','米酷-遇见更好的你')

@section('css')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #setting-form,#upload-image{
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
            <h4>SEO 设置 &gt; </h4>
            <div class="row mt">
                <div class="col-lg-12">
                    @include('default.admin.partial.message')
                    <form role="form" id="setting-form" class="form-horizontal" action="{{ url('/admin/seo/update') }}" method="post">
                        <div class="widget widget-default">
                            <div class="widget-header">
                                <h6>
                                    <i class="fa fa-cog fa-fw"></i>设置
                                </h6>
                            </div>

                            <div class="widget-body">
                                <div class="form-group">
                                    <label for="copy" class="col-sm-2 control-label">版权信息</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="copy" class="form-control" id="copy" placeholder="Copy Right &copy; 2017" value="{{ @$site_copy }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="beian" class="col-sm-2 control-label">备案号</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="beian" class="form-control" id="beian" placeholder="备案号" value="{{ @$site_beian }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="author" class="col-sm-2 control-label">作者</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="author" class="form-control" id="author" placeholder="author" value="{{ @$site_author }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">标题</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="site_title" placeholder="网站标题" value="{{ @$site_title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">关键字</label>
                                    <div class="col-sm-8">
                                        <input placeholder="网站关键字" class="form-control" type="text" name="site_keywords" value="{{ @$site_keywords }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站描述</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="site_description" placeholder="网站描述" value="{!! @$site_description !!}">
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
                    <div class="col-sm-12 clearfix" id="upload-image">
                        <div class="widget widget-default">
                            <div class="widget-header">
                                <h6>
                                    <i class="fa fa-cog fa-fw"></i>网站Logo设置
                                </h6>
                            </div>
                            <div class="widget-body">
                                <div class="form-group col-xs-12 clearfix">
                                    <label class="col-xs-2 control-label" style="line-height: 50px">原图:</label>
                                    <div class="col-xs-10" style="background: #333">
                                        <img src="{{ asset(@$site_logo) }}" alt="" class="img-responsive" style="max-height: 70px">
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <form action="{{ url('/admin/upload/logo') }}" role="form" class="form-horizontal" datatype="image" required  enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="type"  value="site_logo">
                                        <label for="image" class="col-xs-2  control-label">
                                            上传到本地：<i class="fa fa-file-image-o fa-lg fa-fw"></i>
                                        </label>
                                        <div class="col-xs-6">
                                            <input id="image" class="form-control" accept="image/gif,image/jpeg,image/jpg,image/png" type="file" name="image">
                                        </div>
                                        <div class="col-xs-2">
                                            <button type="submit" class="btn btn-primary">
                                                上传
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section><
@endsection

@section('script')
    {{--<!--script for this page-->--}}
    <script>
        //custom select box

        //        $(function(){
        //            $('select.styled').customSelect();
        //        });
        $('.set-list').addClass('active');
        $('.set-seo').addClass('active');
    </script>
@endsection