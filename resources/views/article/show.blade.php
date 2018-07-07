@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">首页</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('article.index') }}">文章</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/category/'.$article->category->id) }}">{{ $article->category->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ str_limit($article->title,32) }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">
                        <h3 class="card-title mt-3">
                            {{ $article->title }}
                        </h3>
                        <small> 分类：{{ $article->category->name }}  ⋅  时间：{{ $article->created_at->diffForHumans() }} ⋅  浏览：0 ⋅  点赞：0 ⋅  评论：0</small>
                    </div>
                    <div class="card-body">
                        {{ $article['content'] }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header text-center">作者：{{ $article->user->name }}</div>

                    <div class="card-body">
                        <p class="text-center">
                            <a href="{{ route('user.show',['id'=>$article->user->id]) }}">
                                <img width="75" height="75" data-src="holder.js/75x75?theme=industrial&text=Avatar" class="rounded-circle border" alt="" src="" data-holder-rendered="true">
                            </a>
                        </p>
                        <p class="font-weight-light">{{ $article->user->motto }}</p>
                    </div>

                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-success mx-3">关注 Ta</button>
                        <button type="button" class="btn btn-light mx-3">发私信</button>
                    </div>
                </div>
                @component('components.motto')@endcomponent
            </div>
        </div>
    </div>
@endsection
