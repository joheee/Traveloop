@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold fs-4 fs-md-3">DAFTAR HOTEL</h2>
        <p class="fs-6 fs-md-5">
            Temukan berbagai pilihan hotel terbaik di sistem Traveloop kami. Kami menyediakan informasi lengkap untuk membantu Anda memilih penginapan yang sesuai dengan kebutuhan Anda.
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3" id="hotelCards">
        @foreach ($hotels as $index => $hotel)
            <div class="col hotel-card" style="{{ $index >= 3 ? 'display: none;' : '' }}">
                <x-card-hotel 
                    id="{{ $hotel->id }}" 
                    name="{{ $hotel->name }}" 
                    address="{{ $hotel->address }}" 
                    description="{{ $hotel->description }}" 
                    image="{{ $hotel->image }}" 
                    price="{{ $hotel->price_per_night }}" 
                />
            </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <button id="expandBtn" class="btn mt-2 text-white" style="background-color: #0ea5e9">Show More</button>
    </div>
</div>

<script>
    const expandBtn = document.getElementById('expandBtn');
    const hotelCards = document.querySelectorAll('.hotel-card');
    let visibleCards = 3;

    expandBtn.addEventListener('click', () => {
        const nextVisible = visibleCards + 3;
        let hasMoreToShow = false;

        hotelCards.forEach((card, index) => {
            if (index < nextVisible) {
                card.style.display = 'block';
            } else {
                hasMoreToShow = true;
            }
        });

        visibleCards = nextVisible;

        expandBtn.textContent = hasMoreToShow ? 'Show More' : 'Show Less';

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

@endsection