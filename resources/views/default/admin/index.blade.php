@extends('default.common.layout.base')

@section('title','米酷-遇见更好的你')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
@endsection

@section('content')
    <div class="content" style="margin-top: 160px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            You are logged in!
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection