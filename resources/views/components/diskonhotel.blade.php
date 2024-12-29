<div class="py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold fs-4 fs-md-3">HOTEL</h2>
        <p class="fs-6 fs-md-5">
            Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan
            praktis.
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3" id="hotelCards">
        @foreach ($hotels as $index => $item)
            <div class="col hotel-card" style="{{ $index >= 3 ? 'display: none;' : '' }}">
                <div class="card h-100 border-primary shadow-sm">
                  @if ($item->image)
                        @php
                                    $images = json_decode($item->image, true); // Decode JSON menjadi array
                                    $firstImage = $images[0] ?? null;
                        @endphp
                        <img src="{{ asset('storage/' . $firstImage) }}" class="card-img-top"
                            alt="{{ $item->name }}">
                    @else
                        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img rounded-3" alt="Indonesia">
                    @endif
                    <a href="{{ route('components.detail', $item->id) }}" class="text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-6 fs-md-5 text-black">{{ $item->name }}</h5>
                            <p class="card-text fs-6 fs-md-4 text-black">{{ $item->description }}</p>
                            <div class="d-flex align-items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt me-2 text-black" viewBox="0 0 16 16"
                                    style="margin-right: 8px;">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                <span class="text-black">{{ $item->address }}</span>
                            </div>
                            <div>
                                <span class="price-old text-decoration-line-through text-danger">Rp.
                                    1.250.000</span><br>
                                <h6 class="fw-bold text-black">{{ $item->price_per_night }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Button to toggle expand/collapse -->
<div class="text-center">
    <button id="expandBtn" class="btn mt-2 text-white" style="background-color: #0ea5e9">Show More</button>
</div>

<style>
    .text-decoration-none:hover {
        color: white;
        background-color: #0ea5e9;
    }
</style>

<script>
    const expandBtn = document.getElementById('expandBtn');
    const hotelCards = document.querySelectorAll('.hotel-card');
    let visibleCards = 3; // Start with 3 visible cards

    expandBtn.addEventListener('click', () => {
        const nextVisible = visibleCards + 3; // Increase by 3
        let hasMoreToShow = false;

        hotelCards.forEach((card, index) => {
            if (index < nextVisible) {
                card.style.display = 'block';
            } else {
                hasMoreToShow = true;
            }
        });

        visibleCards = nextVisible;

        // Update button text based on remaining cards
        expandBtn.textContent = hasMoreToShow ? 'Show More' : 'Show Less';

        // If all cards are visible, reset visibleCards on Show Less
        if (!hasMoreToShow) {
            expandBtn.addEventListener('click', () => {
                hotelCards.forEach((card, index) => {
                    card.style.display = index < 3 ? 'block' : 'none';
                });
                visibleCards = 3;
                expandBtn.textContent = 'Show More';
            });
        }
    });
</script>
