@extends('default.common.layout.admin')

@section('title','米酷-遇见更好的你')

@section('css')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .info-box {
            margin-bottom: 35px;
            color: #fff;
            position: relative;
            padding: 10px;
            background-color: #4fc1e9;
            border-radius: 0.25em;
            text-align: center;
            cursor: pointer;
        }
        .info-box:hover {
            box-shadow: 0 26px 40px -24px #666666;
            -moz-box-shadow: 0 26px 40px -24px #666666;
            -webkit-box-shadow: 0 26px 40px -24px #666666;
        }
        .info-title{
            font-weight: bolder;
            font-size: 2em;
        }
        .info-icon {
            font-size: 3em;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- TWITTER PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="info-box clearfix">
                                    <div class="col-xs-4 info-icon">
                                        <i class="fa fa-bar-chart fa-fw"></i>
                                    </div>
                                    <div class="col-xs-8">
                                        <span>产品总数</span>
                                        <div class="info-title">8</div>
                                    </div>
                                </div>
                            </div><!-- /col-md-4 -->
                        </div>

                    </div>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection

@section('script')
    {{--<!--script for this page-->--}}
    <script>
        //custom select box

//        $(function(){
//            $('select.styled').customSelect();
//        });

    </script>
@endsection