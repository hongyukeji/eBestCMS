@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ul class="breadcrumb"><li><a href="/">首页</a></li>
                <li><a href="{{ route('community') }}">社区</a></li>
                <li><a href="{{ route('tools') }}">工具</a></li>
                <li class="active">字符串大小写转换</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">字符串大小写转换</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <label>转换前</label>
                            <textarea id="source-content" class="form-control" name="source" rows="8" placeholder="请输入需要转换的内容"></textarea></div>
                        <div class="col-lg-2">
                            <div class="row" style="margin-top: 25px;">

                                <div class="form-group">
                                    <button type="button" id="btn-capital" class="center-block btn btn-success">全部转大写</button>
                                </div>

                                <div class="form-group">
                                    <button type="button" id="btn-lower" class="center-block btn btn-primary">全部转小写</button>
                                </div>

                                <div class="form-group">
                                    <button type="button" id="btn-capital-lower" class="center-block btn btn-warning">首字母大写</button>
                                </div>

                                <div class="form-group">
                                    <button type="button" id="btn-length-calc" class="center-block btn btn-info">字符串长度</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <label>转换后</label>
                            <textarea id="now-content" class="form-control" name="now" rows="8"></textarea></div>
                    </div>
                </div>
            </div>
            <script src="{{ asset('statics/js/jquery.min.js') }}"></script>
            <script type="text/javascript">
                $(function () {
                    var sourceContent = $('#source-content');
                    var nowContent = $('#now-content');
                    var btnCapital = $('#btn-capital');
                    var btnLower = $('#btn-lower');
                    var btnCapitalLower = $('#btn-capital-lower');
                    var btnLengthCalc = $('#btn-length-calc');
                    btnCapital.on('click', function () {
                        nowContent.val(sourceContent.val().toUpperCase());
                    });
                    btnLower.on('click', function () {
                        nowContent.val(sourceContent.val().toLowerCase());
                    });
                    btnCapitalLower.on('click', function () {
                        nowContent.val(sourceContent.val().replace(/\b\w+\b/g, function (word) {
                            return word.substring(0, 1).toUpperCase() + word.substring(1).toLowerCase();
                        }));
                    });
                    btnLengthCalc.on('click', function () {
                        nowContent.val(getStrLength(sourceContent.val()));

                        function getStrLength(str) {
                            var cArr = str.match(/[^\x00-\xff]/ig);
                            return str.length + (cArr == null ? 0 : cArr.length);
                        }
                    });
                });
            </script>
        </div>
    </div>
@endsection


