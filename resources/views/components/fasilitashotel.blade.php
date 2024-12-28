<div class="py-5">
  <div class="row align-items-center">
    <div class="mt-0 mt-md-1 col-12 col-md-6 d-flex justify-content-center">
      <div class="stacked-images">
        <img src="{{ asset('static/lobihotel.jpg') }}" alt="Gambar pertama" class="img-fluid hidden-tablet">
        <img src="{{ asset('static/kamar.jpg') }}" alt="Gambar kedua" class="img-fluid hidden-tablet">
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <h2 class="text-uppercase mb-4">Our Services</h2>
      <div class="row">
        <div class="col-6 mb-3">
          <div class="bg-light rounded shadow-sm p-4 text-center">
            <p class="mb-0">Service 1</p>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="bg-light rounded shadow-sm p-4 text-center">
            <p class="mb-0">Service 2</p>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="bg-light rounded shadow-sm p-4 text-center">
            <p class="mb-0">Service 3</p>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="bg-light rounded shadow-sm p-4 text-center">
            <p class="mb-0">Service 4</p>
          </div>
        </div>
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

  .hidden-tablet {
    display: none !important;
  }

  @media (min-width: 1025px) {
    .hidden-tablet {
      display: block !important;
    }
  }

  @media (min-width: 768px) and (max-width: 1024px) {
    .hidden-tablet {
      display: none !important; 
    }
  }
</style>