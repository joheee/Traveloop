@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('content')

<x-navigation />

<div class="mt-4">
    <x-carousel :interval="2000" :images="[
    ['src' => 'hotel-1.jpg', 'title' => 'Amazing Beach', 'caption' => 'A serene view of the beach'],
    ['src' => 'hotel-2.jpg', 'title' => 'Mountain Escape', 'caption' => 'Perfect getaway in the mountains'],
    ['src' => 'hotel-1.jpg', 'title' => 'City Lights', 'caption' => 'Discover the vibrant city life']
]" />

</div>

<div class="py-5">
  <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="fw-bold fs-6">Dapatkan pengalaman yang <br> tak terlupakan dengan satu kali klik</h1>
        <p class="mt-3">Kami menyediakan hotel berkualitas di berbagai lokasi dengan pemesanan yang mudah dan praktis untuk kenyamanan perjalanan Anda.</p>
        <a href="#" class="btn text-white btn-lg rounded mt-3">Pesan Sekarang</a>
      </div>
      <div class="mt-5 col-md-6 d-flex justify-content-center">
        <div class="stacked-images">
          <img src="{{ asset('static/lobihotel.jpg')}}" alt="Gambar pertama" class="img-fluid">
          <img src="{{ asset('static/kamar.jpg')}}" alt="Gambar kedua" class="img-fluid">
        </div>
      </div>
  </div>
</div>

<style>
  .btn {
    background-color: #0ea5e9;
  }
  .stacked-images {
    position: relative;
    display: inline-flex;
  }
  .stacked-images img:first-child {
    width: 200px; 
    height: 300px; 
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    z-index: 2; 
  }
  .stacked-images img:last-child {
    width: 200px; 
    height: 300px;
    object-fit: cover;
    margin-top: -35px; 
    margin-left: -50px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    z-index: 1; 
  }
</style>

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

  
@endsection
