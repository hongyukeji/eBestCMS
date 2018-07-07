@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">
                        写文章
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('/article') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="title">标题：</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="describe">摘要：</label>
                                <textarea class="form-control" rows="2" id="describe" name="describe">{{ old('describe') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sel1">分类：</label>
                                <select class="form-control" id="sel1" name="category">
                                    <option selected>请选择...</option>
                                    @foreach ($category as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">内容：</label>
                                <textarea class="form-control" rows="10" id="content" name="content">{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2">提交</button>
                                <button type="reset" class="btn btn-light">重置</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header text-center">小提示</div>

                    <div class="card-body">
                        <p class="font-weight-light">1、标题不能为空。</p>
                        <p class="font-weight-light">2、摘要为空时，系统会自动截取文章内容字段。</p>
                    </div>
                </div>
                @component('components.motto')@endcomponent
            </div>
        </div>
    </div>
@endsection
