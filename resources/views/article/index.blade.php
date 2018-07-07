@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">最新文章</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">热门文章</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="card-columns mt-4">
                                    @foreach ($articles['new'] as $article)
                                    <div class="card">
                                        <img class="card-img-top mx-auto d-block" data-src="holder.js/100px120/?theme=industrial&text={{ $article->title }}" src="" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $article->title }}</h5>
                                            <p class="card-text">{{ $article->describe }}</p>
                                            <p class="card-text">
                                                <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                                                <a href="{{ url('/article/' . $article->id) }}" class="btn btn-outline-success btn-sm float-right">阅读</a>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="float-right">
                                    {{ $articles['new']->links() }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="card-columns mt-4">
                                    @foreach ($articles['hot'] as $article)
                                        <div class="card">
                                            <img class="card-img-top mx-auto d-block" data-src="holder.js/100px160/?theme=industrial&text={{ $article->title }}" src="" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $article->title }}</h5>
                                                <p class="card-text">{{ $article->describe }}</p>
                                                <p class="card-text">
                                                    <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                                                    <a href="{{ url('/article/' . $article->id) }}" class="btn btn-outline-success btn-sm float-right">阅读</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="float-right">
                                    {{ $articles['hot']->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @component('components.motto')@endcomponent
                @component('components.category')@endcomponent
            </div>
        </div>
    </div>
@endsection
