

@extends('layout.bootstrap')

@section('title', 'Profile')

@section('content')
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-3 shadow-sm">
            <h5 class="fw-bold text-center">Profile</h5>
            <div class="d-flex align-items-center">
              <div
                class="rounded-circle bg-light d-flex justify-content-center align-items-center me-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-person-circle text-secondary fs-1"></i>
              </div>
              <div>
                <h5 class="mb-1">Taufan Hidayatul Akbar</h5>
                <p class="text-muted mb-1">taufan@gmail.com</p>
              </div>
            </div>

            <p class="fw-bold mt-3">Tanggal Bergabung: -</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-3 shadow-sm">
            <h5 class="mb-4 fw-bold">Riwayat Booking</h5>
            <table class="table table-bordered text-center">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Nama Hotel</th>
                  <th>Tanggal Check In</th>
                  <th>Tanggal Check Out</th>
                  <th>Jumlah Tamu</th>
                  <th>Harga</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="7" class="text-muted">
                    Belum ada riwayat booking
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br>
    </div>

@endsection 