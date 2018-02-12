@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">最新公告</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a href="/article/1" class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    文章标题
                                    <span class="badge pull-right">发布时间：2018-2-13</span>
                                </h4>
                                <p class="list-group-item-text">
                                    文章内容简介
                                </p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    文章标题
                                    <span class="badge pull-right">发布时间：2018-2-13</span>
                                </h4>
                                <p class="list-group-item-text">
                                    文章内容简介
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">鸿宇团队座右铭</div>

                    <div class="panel-body">
                        堂堂正正做人，踏踏实实做事。
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection