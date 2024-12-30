<div class="py-5">
    <h2 class="text-center mb-4">Hotel <br><span>Recomended</span></h2>
    <div class="row g-3">
        @foreach ($recomended as $item)
            <div class="col-lg-4 col-6 col-md-6 mb-4">
                <a href="#" class="card position-relative text-white rounded-3">
                    @if ($item->image)
                        @php
                            $firstImage = $item->image[0]; 
                        @endphp
                        <img src="{{ asset('storage/' . $firstImage) }}" class="card-img-top"
                            alt="{{ $item->name }}">
                    @else
                        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img rounded-3" alt="Indonesia">
                    @endif
                    <div class="custom-overlay rounded-3"></div>
                    <div class="position-absolute top-0 start-0 text-start p-3">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->address  }}</p>
                    </div>
                </a>
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
