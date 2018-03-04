@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">首页</a></li>
            <li><a href="{{ route('article.index') }}">文章</a></li>
            <li><a href="javascript:;">{{ $article->category->name }}</a></li>
            <li class="active">{{ str_limit($article->title,'32') }}</li>
        </ul>

        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>{{ $article->title }}</h4>
                    </div>

                    <div class="panel-body">
                        {!! $article->content !!}
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