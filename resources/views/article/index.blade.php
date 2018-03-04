@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">最新文章</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach ($articles as $article)
                            <a href="{{ route('article.show',$article->id) }}" class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    {{ $article->title }}
                                    <span class="badge pull-right">发布时间：{{ $article->created_at }}</span>
                                </h4>
                                <p class="list-group-item-text">
                                    {!! $article->content !!}
                                </p>
                            </a>
                            @endforeach
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