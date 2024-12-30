@extends('layout.bootstrap')

@section('content')
    <style>
        .card-header {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-danger {
            font-size: 1rem;
        }

        .text-dark {
            font-size: 1.2rem;
        }
    </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <a href="{{ route('hotel.detail', $hotel->id) }}" class="btn btn-sm btn-light">
                                <i class="bi bi-chevron-compact-left"></i>
                                Kembali
                            </a>
                            <h5 class="card-title fw-bold mt-3">{{ $hotel->name }}</h5>
                            <p class="text-muted">{{ $hotel->address }}</p>
                            <img src="{{ $hotel->image ? asset('storage/' . $hotel->image[0]) : asset('static/hotel-1.jpg') }}"
                                alt="Hotel Image" class="img-fluid rounded mb-3" />
                            <div class="border p-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <span id="date-range">Jum, 27 Des - Sab, 28 Des</span>
                                    <span id="guest-count">2 orang Per 1 Kamar</span>
                                </div>
                                <div class="mt-2">
                                    <span id="night-count">1 Malam</span>
                                </div>
                            </div>

                            <p class="mb-1">
                                Harga Permalam dan Perkamar <strong class="text-success">Rp. {{ $hotel->price_per_night }}</strong>
                            </p>
                            <p class="text-dark fw-bold">
                                Total Harga: <strong id="total-price">Rp. 750.000</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-light text-center">
                            Rincian Pesanan Anda
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                                Pastikan Anda mengisi detail pemesanan dengan benar untuk
                                memastikan kenyamanan dan kelancaran proses reservasi.
                            </p>
                            <form>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap"
                                            placeholder="Masukkan nama lengkap" value="{{ auth()->user()->name }}" />
                                    </div>
                                    <div class="col">
                                      <label for="jumlahKamar" class="form-label">Jumlah Kamar</label>
                                    <input type="number" class="form-control" id="jumlahKamar"
                                        placeholder="Masukkan jumlah kamar" value="1" min="1" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="checkIn" class="form-label">Check In</label>
                                        <input type="date" class="form-control" id="checkIn" />
                                    </div>
                                    <div class="col">
                                        <label for="checkOut" class="form-label">Check Out</label>
                                        <input type="date" class="form-control" id="checkOut" />
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary w-100">
                                    PESAN SEKARANG
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const today = new Date();
            const tomorrow = new Date();
            tomorrow.setDate(today.getDate() + 1);

            const formatDate = (date) => {
                const options = {
                    weekday: 'short',
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                };
                return new Intl.DateTimeFormat('id-ID', options).format(date);
            };

            const checkInInput = document.getElementById('checkIn');
            const checkOutInput = document.getElementById('checkOut');
            const dateRangeSpan = document.getElementById('date-range');

            checkInInput.value = today.toISOString().split('T')[0];
            checkOutInput.value = tomorrow.toISOString().split('T')[0];
            dateRangeSpan.textContent = `${formatDate(today)} - ${formatDate(tomorrow)}`;

            checkInInput.addEventListener('change', () => {
                const checkInDate = new Date(checkInInput.value);
                const checkOutDate = new Date(checkOutInput.value);
                if (checkOutDate <= checkInDate) {
                    checkOutInput.value = new Date(checkInDate.getTime() + 24 * 60 * 60 * 1000).toISOString().split(
                        'T')[0];
                }
                dateRangeSpan.textContent = `${formatDate(checkInDate)} - ${formatDate(new Date(checkOutInput.value))}`;
            });

            checkOutInput.addEventListener('change', () => {
                const checkInDate = new Date(checkInInput.value);
                const checkOutDate = new Date(checkOutInput.value);
                if (checkOutDate <= checkInDate) {
                    checkInInput.value = new Date(checkOutDate.getTime() - 24 * 60 * 60 * 1000).toISOString().split(
                        'T')[0];
                }
                dateRangeSpan.textContent = `${formatDate(new Date(checkInInput.value))} - ${formatDate(checkOutDate)}`;
            });

            const calculateNights = (startDate, endDate) => {
                const start = new Date(startDate);
                const end = new Date(endDate);
                return Math.ceil((end - start) / (1000 * 60 * 60 * 24));
            };

            const updateNightCount = () => {
                const checkInDate = new Date(checkInInput.value);
                const checkOutDate = new Date(checkOutInput.value);
                const nights = calculateNights(checkInInput.value, checkOutInput.value);


                const nightCountSpan = document.getElementById('night-count');
                nightCountSpan.textContent = `${nights} Malam`;
            };

            checkInInput.addEventListener('change', () => {
                const checkInDate = new Date(checkInInput.value);
                const checkOutDate = new Date(checkOutInput.value);
                if (checkOutDate <= checkInDate) {
                    checkOutInput.value = new Date(checkInDate.getTime() + 24 * 60 * 60 * 1000).toISOString().split(
                        'T')[0];
                }
                dateRangeSpan.textContent = `${formatDate(checkInDate)} - ${formatDate(new Date(checkOutInput.value))}`;
                updateNightCount();
            });

            checkOutInput.addEventListener('change', () => {
                const checkInDate = new Date(checkInInput.value);
                const checkOutDate = new Date(checkOutInput.value);
                if (checkOutDate <= checkInDate) {
                    checkInInput.value = new Date(checkOutDate.getTime() - 24 * 60 * 60 * 1000).toISOString().split(
                        'T')[0];
                }
                dateRangeSpan.textContent = `${formatDate(new Date(checkInInput.value))} - ${formatDate(checkOutDate)}`;
                updateNightCount();
            });


            updateNightCount();


            const jumlahKamarInput = document.getElementById('jumlahKamar');
            const guestCountSpan = document.getElementById('guest-count');

            const updateGuestCount = () => {
                const roomCount = jumlahKamarInput.value || 1; // Jumlah kamar
                guestCountSpan.textContent = `2 orang per ${roomCount} kamar`;
            };

            jumlahKamarInput.addEventListener('input', updateGuestCount);

            updateGuestCount();

            const pricePerNight = {{ $hotel->price_per_night }};
            const totalPriceSpan = document.getElementById('total-price');

            const calculateTotalPrice = () => {
                const nights = calculateNights(checkInInput.value, checkOutInput.value);
                const rooms = jumlahKamarInput.value || 1;
                const totalPrice = nights * pricePerNight * rooms;
                const formatter = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 3,
                    maximumFractionDigits: 3,
                });

                totalPriceSpan.textContent = formatter.format(totalPrice).replace(/\./g, ',').replace(',00', '.00');;
            };

            jumlahKamarInput.addEventListener('input', calculateTotalPrice);

            checkInInput.addEventListener('change', calculateTotalPrice);
            checkOutInput.addEventListener('change', calculateTotalPrice);

            calculateTotalPrice();
        </script>
    @endsection
