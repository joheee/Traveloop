<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="{{ $interval ?? 2000 }}">
    <ol class="carousel-indicators">
        @foreach($images as $index => $image)
            <li data-target="#carouselExampleControls" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($images as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ asset('static/' . $image['src']) }}" alt="Slide {{ $index + 1 }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $image['title'] ?? 'Beautiful Destination' }}</h5>
                    <p>{{ $image['caption'] ?? 'Explore the world with us!' }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<style>
    .carousel-item {
        position: relative;
        background-color: #000;
    }

    .carousel-item img {
        height: 100vh;
        object-fit: cover;
        filter: brightness(60%);
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000;
        border-radius: 50%;
        padding: 10px;
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #f8f9fa;
    }

    .carousel-indicators li {
        background-color: #fff;
        opacity: 0.6;
    }

    .carousel-indicators .active {
        background-color: #007bff;
    }
</style>
