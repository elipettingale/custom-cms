<div id="hero-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($slides as $index => $slide)
            <li data-target="#hero-slider" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($slides as $index => $slide)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="background-image: url({{ $slide['image'] }})">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">{{ $slide['title'] }}</h3>
                    <p class="lead">{{ $slide['text'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#hero-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#hero-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>