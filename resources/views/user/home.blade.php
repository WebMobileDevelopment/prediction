@extends('user.layouts.base')

@section('page-content')
    <div class="main">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $i => $banner)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        <img src="{{ $banner->base64_img }}" class="d-block w-100">
                    </div>
                @endforeach
            </div>
        </div>
        @include('user.elements.flip-container')

        @include('user.elements.list-container')


    </div>
    <!-- main -->
@endsection
