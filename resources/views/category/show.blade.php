@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">{{ $category->name }}</div>
                    <div class="card-body">
                        <div class="card-columns">
                            @foreach ($articles as $article)
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
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @component('components.category')@endcomponent
                @component('components.motto')@endcomponent
            </div>
        </div>
    </div>
@endsection
