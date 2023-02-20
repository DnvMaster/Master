<div class="slider">
    @if(count($sliders) > 0)
        @foreach($sliders as $slider)
            <div class="slider-slide">
                <img src="{{ asset(env('MASTER')) }}/images/sliders/{{ $slider->img }}">
                <div class="container">
                    <div class="slide-content">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <h2 class="slider-slide-element">{{ $slider->title }}</h2>
                                <p class="slider-slide-element">{{ $slider->text }}</p>
                                <a href="#">Read mo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
