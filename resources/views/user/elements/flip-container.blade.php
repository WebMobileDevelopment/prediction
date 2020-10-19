<div class="grid-slider">
    <div class="container">
        <div class="swiper-container py-4">
            <div class="swiper-wrapper">
                @foreach ($matchs as $match)
                    <div class="swiper-slide">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                @include('user.elements.flip-card-front')
                                @include('user.elements.flip-card-back')
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
