@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header text-center">留言板</div>
                    <div class="card-body">
                        畅所欲言！
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @component('components.motto')@endcomponent
                @component('components.music')@endcomponent
            </div>
        </div>
    </div>
@endsection
