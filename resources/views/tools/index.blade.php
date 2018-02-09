@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">工具</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="{{ url('tools/toggleCase') }}" type="button" class="btn btn-default">字符串大小写转换</a>
                                </div>
                            </div>
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