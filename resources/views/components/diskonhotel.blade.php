<div class="py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">HOTEL</h2>
    <p>
      Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan praktis.
    </p>
  </div>
  <div class="row gy-4"> 
    <div class="col-12 col-md-6 col-lg-4 custom-gap">
      <div class="card h-100 border-primary shadow-sm hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center mb-2 text-muted">
            <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
          </div>
          <div>
            <span class=" price-old text-decoration-line-through text-danger">Rp. 1.250.000</span><br>
            <h6 class="fw-bold">Rp. 750.000</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 custom-gap">
      <div class="card h-100 border-primary shadow-sm hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center mb-2 text-muted">
            <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
          </div>
          <div>
            <span class=" price-old text-decoration-line-through text-danger">Rp. 1.250.000</span><br>
            <h6 class="fw-bold">Rp. 750.000</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 custom-gap tablet-hidden">
      <div class="card h-100 border-primary shadow-sm hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center mb-2 text-muted">
            <i class="bi bi-geo-alt-fill me-2"></i> Pangandaran
          </div>
          <div>
            <span class=" price-old text-decoration-line-through text-danger">Rp. 1.250.000</span><br>
            <h6 class="fw-bold">Rp. 750.000</h6>
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
  .price-old {
    text-decoration: line-through !important;
    font-size: 0.9rem;
  }

  @media (max-width: 576px) {
    .custom-gap {
      margin-bottom: 1.5rem !important; 
    }
  }

  @media (max-width: 768px) and (min-width: 577px) {
    .tablet-hidden {
      display: none !important;
    }
  }
</style>