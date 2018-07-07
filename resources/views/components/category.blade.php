<div class="card card-default">
    <div class="card-header text-center">分类</div>
    <div class="card-body">
        <nav class="nav nav-pills flex-column">
            @foreach ($category as $cate)
                <a class="nav-link" href="{{ url('/category/' . $cate->id) }}">{{ $cate->name }}</a>
                {{--<nav class="nav nav-pills flex-column">
                    <a class="nav-link ml-3 my-1" href="#">其他</a>
                </nav>--}}
            @endforeach
        </nav>
    </div>
</div>