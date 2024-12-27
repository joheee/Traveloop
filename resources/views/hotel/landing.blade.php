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
      <!-- Teks -->
      <div class="col-md-6">
        <h1 class="fw-bold">Dapatkan pengalaman yang <br> tak terlupakan dengan satu kali klik</h1>
        <p class="mt-3">Kami menyediakan hotel berkualitas di berbagai lokasi dengan pemesanan yang mudah dan praktis untuk kenyamanan perjalanan Anda.</p>
        <a href="#" class="btn btn-primary btn-lg mt-3">Pesan Sekarang</a>
      </div>
      
      <!-- Gambar bertumpuk horizontal tanpa gap -->
      <div class="mt-5 col-md-6 d-flex justify-content-center">
        <div class="stacked-images">
          <img src="{{ asset('static/lobihotel.jpg')}}" alt="Gambar pertama" class="img-fluid">
          <img src="{{ asset('static/kamar.jpg')}}" alt="Gambar kedua" class="img-fluid">
        </div>
      </div>
  </div>
</div>

<style>
  .stacked-images {
    position: relative;
    display: inline-flex;
  }
  .stacked-images img:first-child {
    width: 200px; /* Lebar gambar pertama */
    height: 300px; /* Tinggi gambar pertama */
    object-fit: cover;
    border-radius: 8px; /* Opsional: beri sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Opsional: bayangan */
  }
  .stacked-images img:last-child {
    width: 200px; /* Lebar gambar kedua */
    height: 300px; /* Tinggi gambar kedua */
    object-fit: cover;
    margin-top: -70px; /* Geser gambar kedua lebih ke atas */
    margin-left: -50px; /* Overlap gambar kedua ke gambar pertama */
    border-radius: 8px; /* Opsional: beri sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Opsional: bayangan */
  }
</style>


<div class="py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">HOTEL</h2>
    <p class="text-muted">
      Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan praktis.
    </p>
  </div>
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card border-primary shadow-sm h-100 hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text text-muted">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center text-muted mb-2">
            <i class="bi bi-geo-alt-fill me-2 text-primary"></i> Pangandaran
          </div>
          <p class="text-muted">
            <span class="price-old text-danger">Rp. 1.250.000</span><br>
            <span class="fw-bold text-primary">Rp. 750.000</span>
          </p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card border-primary shadow-sm h-100 hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text text-muted">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center text-muted mb-2">
            <i class="bi bi-geo-alt-fill me-2 text-primary"></i> Pangandaran
          </div>
          <p class="text-muted">
            <span class="price-old text-danger">Rp. 1.250.000</span><br>
            <span class="fw-bold text-primary">Rp. 750.000</span>
          </p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card border-primary shadow-sm h-100 hover-card">
        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img-top" alt="Aurora Bliss Hotel">
        <div class="card-body">
          <h5 class="card-title fw-bold">Aurora Bliss Hotel</h5>
          <p class="card-text text-muted">Hotel mewah dengan suasana tenang dan layanan premium.</p>
          <div class="d-flex align-items-center text-muted mb-2">
            <i class="bi bi-geo-alt-fill me-2 text-primary"></i> Pangandaran
          </div>
          <p class="text-muted">
            <span class="price-old text-danger">Rp. 1.250.000</span><br>
            <span class="fw-bold text-primary">Rp. 750.000</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Tombol -->
  <div class="text-center mt-4">
    <a href="#" class="btn btn-primary btn-lg">READ MORE</a>
  </div>
</div>

<!-- CSS Tambahan -->
<style>
  .hover-card:hover {
    background-color: #007bff !important; /* Warna biru saat hover */
    color: white !important; /* Teks menjadi putih */
    border-color: #0056b3 !important; /* Border biru gelap */
  }

  .hover-card:hover .card-title,
  .hover-card:hover .card-text,
  .hover-card:hover .text-muted {
    color: white !important; /* Warna teks berubah saat hover */
  }

  /* Menambahkan gaya untuk teks dengan kelas fw-bold dan text-primary yang berubah warna saat hover */
  .hover-card:hover .fw-bold.text-primary {
    color: white !important;
  }

  .card {
    border-radius: 12px;
  }

  .card img {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    height: 200px;
    object-fit: cover;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .price-old {
    text-decoration: line-through !important; /* Garis horizontal pada harga lama */
    font-size: 0.9rem;
  }
</style>

  
@endsection
