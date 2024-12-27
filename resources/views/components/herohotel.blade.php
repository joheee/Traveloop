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