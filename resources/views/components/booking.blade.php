<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Details</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
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
        <!-- Form Section -->
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
                    <label for="namaLengkap" class="form-label"
                      >Nama Lengkap</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="namaLengkap"
                      placeholder="Masukkan nama lengkap"
                    />
                  </div>
                  <div class="col">
                    <label for="account" class="form-label">Account</label>
                    <input
                      type="text"
                      class="form-control"
                      id="account"
                      placeholder="Masukkan akun"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="noTelepon" class="form-label">No Telepon</label>
                  <input
                    type="text"
                    class="form-control"
                    id="noTelepon"
                    placeholder="Masukkan nomor telepon"
                  />
                </div>
                <button type="submit" class="btn btn-primary w-100">
                  PESAN SEKARANG
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- Booking Details Section -->
        <div class="col-md-6">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title">AURORA BLISS HOTEL</h5>
              <p class="text-muted">No 15 JL Pangandaran - Jawa Barat</p>
              <img
                src="https://via.placeholder.com/300x150"
                alt="Hotel Image"
                class="img-fluid rounded mb-3"
              />
              <div class="border p-3 mb-3">
                <div class="d-flex justify-content-between">
                  <span>Jum, 27 Des - Sab, 28 Des</span>
                  <span>1 Kamar, 2 Tamu</span>
                </div>
                <div class="mt-2">1 Malam</div>
              </div>
              <p class="text-danger mb-1">
                Your savings <strong>Rp. 400.000</strong>
              </p>
              <p class="text-dark fw-bold">
                Total Price <strong>Rp. 750.000</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
