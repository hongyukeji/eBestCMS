@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-body">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="#" target="_blank">
                                        <img class="d-block w-100" data-src="holder.js/800x350?theme=industrial&text=Second slide" src="" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>标题</h5>
                                            <p>描述</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#" target="_blank">
                                        <img class="d-block w-100" data-src="holder.js/800x350?theme=industrial&text=Second slide" src="" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>标题</h5>
                                            <p>描述</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" data-src="holder.js/800x350?theme=industrial&text=Second slide" src="" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
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
