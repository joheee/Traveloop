<div class="py-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold">HOTEL</h2>
      <p>
        Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan praktis.
      </p>
    </div>
    <div class="row g-4 rounded-2">
      <div class="col-md-4">
        <div class="card border-primary shadow-sm h-100 hover-card">
          <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top rounded-top-2" alt="Aurora Bliss Hotel">
          <div class="card-body">
            <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
            <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
            <div class="d-flex align-items-center mb-2">
              <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
            </div>
            <p class="price">
              <span class="price-old text-danger">Rp. 1.250.000</span><br>
              <span class="fw-bold fs-3">Rp. 750.000</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-primary shadow-sm h-100 hover-card">
          <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top rounded-top-2" alt="Aurora Bliss Hotel">
          <div class="card-body">
            <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
            <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
            <div class="d-flex align-items-center mb-2">
              <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
            </div>
            <p class="price">
              <span class="price-old text-danger">Rp. 1.250.000</span><br>
              <span class="fw-bold">Rp. 750.000</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-primary shadow-sm h-100 hover-card">
          <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top rounded-top-2" alt="Aurora Bliss Hotel">
          <div class="card-body">
            <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
            <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
            <div class="d-flex align-items-center mb-2">
              <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
            </div>
            <p class="price">
              <span class="price-old text-danger">Rp. 1.250.000</span><br>
              <span class="fw-bold">Rp. 750.000</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="#" class="btn text-white btn-lg rounded-">READ MORE</a>
    </div>
  </div>
  
  <style>
    .hover-card:hover {
      background-color: #0ea5e9 !important; 
      color: white !important; 
      border-color: #0ea5e9 !important; 
    }
  
    .hover-card:hover .card-title,
    .hover-card:hover .card-text {
      color: white !important; 
    }
  
    .hover-card:hover .fw-bold.text-primary {
      color: white !important;
    }
  
    .card img {
      height: 200px;
      object-fit: cover;
    }
  
    .btn {
      background-color: #0ea5e9;
    }
  
    .price-old {
      text-decoration: line-through !important;
      font-size: 0.9rem;
    }
  </style>