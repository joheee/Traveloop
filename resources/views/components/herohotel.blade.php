<div class="py-5">
  <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
          <h2 class=" judul fw-bold">Dapatkan pengalaman yang <br> tak terlupakan dengan satu kali klik</h2>
          <p class="mt-3">
              Kami menyediakan hotel berkualitas di berbagai lokasi dengan pemesanan yang mudah dan praktis untuk kenyamanan perjalanan Anda.
          </p>
          <a href="#" class="btn btn-lg text-white rounded mt-5 d-flex justify-content-start" style="background-color: #0ea5e9; width: 175px">Pesan Sekarang</a>
      </div>
      <div class="col-md-6 d-none d-md-flex justify-content-center">
          <div class="stacked-images">
              <img src="{{ asset('static/lobihotel.jpg')}}" alt="Gambar pertama" 
                   class="img-fluid shadow" 
                   style="width: 200px; height: 300px; object-fit: cover; z-index: 2;">
              <img src="{{ asset('static/kamar.jpg')}}" alt="Gambar kedua" 
                   class="img-fluid shadow" 
                   style="width: 200px; height: 300px; object-fit: cover; margin-top: -35px; margin-left: -50px; z-index: 1;">
          </div>
      </div>
  </div>
</div>

<style>

  @media (max-width: 576px) { 
      .stacked-images {
          flex-direction: column; 
          align-items: center; 
      }
      .stacked-images img {
          width: 140px;
          height: 210px;
          margin-left: 0; 
      }
      .stacked-images img:last-child {
          margin-top: -15px; 
      }
  }
</style>
