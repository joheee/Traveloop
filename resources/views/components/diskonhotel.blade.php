<div class="py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold fs-4 fs-md-3">HOTEL</h2> <!-- Ukuran lebih kecil pada mobile -->
    <p class="fs-6 fs-md-5">
      Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan praktis.
    </p>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-3">
    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100 border-primary shadow-sm">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold fs-6 fs-md-5">Aurora Bliss Hotel</h5> <!-- Ukuran teks responsif -->
          <p class="card-text fs-6 fs-md-4">Hotel mewah dengan suasana tenang dan layanan premium.</p> <!-- Ukuran teks responsif -->
          <div class="d-flex align-items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16" style="margin-right: 8px;">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            Pangandaran
          </div>
          <div>
            <span class="price-old text-decoration-line-through text-danger">Rp. 1.250.000</span><br>
            <h6 class="fw-bold">Rp. 750.000</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col">
      <div class="card h-100 border-primary shadow-sm">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Serene View Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold fs-6 fs-md-5">Serene View Hotel</h5> <!-- Ukuran teks responsif -->
          <p class="card-text fs-6 fs-md-4">Hotel modern dengan pemandangan spektakuler dan fasilitas lengkap.</p> <!-- Ukuran teks responsif -->
          <div class="d-flex align-items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16" style="margin-right: 8px;">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            Bandung
          </div>
          <div>
            <span class="price-old text-decoration-line-through text-danger">Rp. 1.000.000</span><br>
            <h6 class="fw-bold">Rp. 600.000</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col">
      <div class="card h-100 border-primary shadow-sm">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Tranquil Resort">
        <div class="card-body">
          <p class="card-title fw-bold fs-6 fs-md-1">Tranquil Resort</p> <!-- Ukuran teks responsif -->
          <p class="card-text fs-6 fs-md-4">Resort asri dengan suasana alami dan pengalaman yang menenangkan.</p> <!-- Ukuran teks responsif -->
          <div class="d-flex align-items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16" style="margin-right: 8px;">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            Bali
          </div>
          <div>
            <span class="price-old text-decoration-line-through text-danger">Rp. 1.500.000</span><br>
            <h6 class="fw-bold">Rp. 950.000</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-4">
    <a href="#" class="btn text-white btn-lg" style="background-color:#0ea5e9;">READ MORE</a>
  </div>
</div>

<style>
  .card-body:hover{
    color: white;
    background-color: #0ea5e9;
  }
</style>