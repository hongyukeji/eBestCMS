@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">分类</div>
                    <div class="card-body">
                        <div class="card-columns">
                            @foreach ($category as $cate)
                                <div class="card">
                                    <img class="card-img-top mx-auto d-block" data-src="holder.js/100px120/?theme=industrial&text={{ $cate->name }}" src="" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $cate->name }}</h5>
                                        <p class="card-text">
                                            <small class="text-muted">{{ $cate->created_at->diffForHumans() }}</small>
                                            <a href="{{ route('category.show',['id'=>$cate->id]) }}" class="btn btn-outline-success btn-sm float-right">查看</a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="float-right">
                            {{ $category->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @component('components.motto')@endcomponent
            </div>
        </div>
    </div>
@endsection
