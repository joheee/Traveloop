<div class="py-5">
    <h2 class="text-center mb-4">Hotel <br><span>Recomended</span></h2>
    <div class="row g-3">
        @foreach ($recomended as $item)
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="card position-relative text-white rounded-3">
                    @if ($item->image)
                    <img src="{{ asset('storage/hotels/'.$item->image) }}" class="card-img-top" alt="Aurora Bliss Hotel">
                    @else
                    <img src="{{ asset('static/hotel1.jpg') }}" class="card-img rounded-3" alt="Indonesia">
                    @endif
                    <div class="custom-overlay rounded-3"></div>
                    <div class="position-absolute top-0 start-0 text-start p-3">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->address.", ".$item->price_per_night }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .custom-overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0.375rem;
    }
</style>
