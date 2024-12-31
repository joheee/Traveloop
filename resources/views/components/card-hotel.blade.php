<div>
    <div class="card p-0 border-primary shadow-sm text-decoration-none d-flex text-black card-hotel">
        @if ($image)
            @php
                $images = json_decode($image, true);
                $firstImage = $images[0] ?? null;
            @endphp
            <img src="{{ asset('storage/' . $firstImage) }}" class="card-img-top h-50"
                alt="{{ $name }}">
        @else
            <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top h-50" alt="Indonesia">
        @endif
        <a href="{{ route('hotel.detail', $id) }}" class="text-decoration-none h-50 text-black">
            <div class="card-body">
                <h5 class="card-title fw-bold fs-6 fs-md-5 ">{{ $name }}</h5>
                <p class="card-text fs-6 fs-md-4  text-truncate">{{ $description }}</p>
                <div class="d-flex align-items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-geo-alt me-2 " viewBox="0 0 16 16"
                        style="margin-right: 8px;">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <span class="">{{ $address }}</span>
                </div>
                <div>
                    <h6 class="fw-bold ">Rp.{{ number_format($price * 1000, 2, ',', '.') }}</h6>
                </div>
            </div>
        </a>
      </div>
</div>