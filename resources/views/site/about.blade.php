@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">关于我们</div>
                    <div class="card-body">
                        鸿宇科技有限公司是一家以信息技术服务为主导、立足于高科技领域的前沿，专业致力于网络Web开发及应用的高科技企业。本着“质量第一、诚信为本”的朴素经营理念，以务实创新的精神不断进行开拓实践和探索进取。
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @component('components.motto')@endcomponent
            </div>
        </div>
    </div>
@endsection
