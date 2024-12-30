@extends('layout.bootstrap')

@section('title', 'Profile')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">User Profile</h2>

        <div class="card mb-4">
            <div class="card-header">
                <h4>Informasi Pengguna</h4>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Tanggal Bergabung:</strong> {{ $user->created_at->format('d M Y') }}</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h4>Riwayat Booking</h4>
            </div>
            <div class="card-body">
                @if ($histories->isEmpty())
                    <p class="text-muted">Belum ada riwayat booking.</p>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Hotel</th>
                                <th>Tanggal Check In</th>
                                <th>Tanggal Check Out</th>
                                <th>Jumlah Tamu</th>
                                <th>Harga Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($histories as $index => $history)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $history->booking->hotel->name }}</td>
                                    <td>{{ $history->booking->check_in_date }}</td>
                                    <td>{{ $history->booking->check_out_date }}</td>
                                    <td>{{ $history->booking->number_of_rooms }}</td>
                                    <td>{{ NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)->format($history->booking->total_price * 1000); }}</td>
                                    <td>
                                        <span
                                            class="badge {{ $history->booking->status === 'confirmed' ? 'bg-success' : ($history->booking->status === 'pending' ? 'bg-warning' : 'bg-info') }}">
                                            {{ ucfirst($history->booking->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
