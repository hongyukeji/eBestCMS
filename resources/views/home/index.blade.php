@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <img width="75" height="75" data-src="holder.js/75x75?theme=industrial&text=Avatar" class="rounded-circle border" alt="" src="" data-holder-rendered="true">
                        </div>
                        <div class="col-md-9">
                            <h5 class="font-weight-bold mt-3 mb-1">{{ Auth::user()->name }}</h5>
                            <p class="font-weight-light mb-0">生活的理想，就是为了理想的生活。</p>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-success btn-sm mt-4 mr-3">关注 Ta</button>
                            <button type="button" class="btn btn-outline-success btn-sm mt-4">发私信</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-header">我的动态</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name }} 欢迎回来！
                </div>
            </div>
        </div>
        <div class="col-md-3">
            @component('components.motto')@endcomponent
        </div>
    </div>
</div>
@endsection
