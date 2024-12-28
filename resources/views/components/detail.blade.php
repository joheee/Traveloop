<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .highlight {
            background-color: #f3faff;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 14px;
            color: #007bff;
            display: inline-block;
            margin-top: 10px;
        }

        .badge-star {
            background-color: #ffd700;
            color: #000;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        .hotel-images img {
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container my-5">

        <div class="row">
            <div class="col-lg-7">
                <img src="{{ asset('static/hotel1.jpg') }}" alt="Hotel Main" class="img-fluid rounded"
                    style="min-height: 360px; object-fit: cover; width: 1000px;">
            </div>
            <div class="col-lg-5">
                <div class="row g-2 mb-4 h-100">
                    <div class="col-6">
                        <img src="{{ asset('static/hotel1.jpg') }}" alt="Hotel 1"
                            class="img-fluid rounded w-100 h-100 object-fit-cover">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('static/hotel1.jpg') }}" alt="Hotel 2"
                            class="img-fluid rounded w-100 h-100 object-fit-cover">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('static/hotel1.jpg') }}" alt="Hotel 3"
                            class="img-fluid rounded w-100 h-100 object-fit-cover">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('static/hotel1.jpg') }}" alt="Hotel 4"
                            class="img-fluid rounded w-100 h-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-7">

                <div class="mt-4">
                    <h3 class="fw-bold">AURORA BLISS HOTEL <span class="badge-star">5★</span></h3>
                    <p>No 15 JL Pangandaran - Jawa Barat</p>
                    <a href="#" class="link">Nikmati Pengalaman check in di hotel ini</a>
                    <h5 class="mt-3 fw-bold">Deskripsi</h5>
                    <p>
                        AURORA BLISS HOTEL terletak di pesisir pantai. Hotel ini merupakan hotel dengan fasilitas
                        premium dan harga
                        terjangkau. Hotel ini memiliki restoran dan fasilitas wifi gratis. Hotel ini berjarak ~+350
                        meter dari Pantai
                        dan 1 km dari Pantai putih.
                    </p>
                    <h5 class="fw-bold">Fasilitas</h5>
                    <div class="container bg-light p-4 rounded">
    <div class="row">

        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                </svg>
                <span>Free Wifi</span>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
  <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2"/>
</svg>
               <span>TV</span>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                </svg>
                <span>Free Wifi</span>
            </div>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                </svg>
                <span>Free Wifi</span>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                </svg>
                <span>Free Wifi</span>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                </svg>
                <span>Free Wifi</span>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>

            <div class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary fw-bold">
                            Rp.750.000 <span class="text-danger text-decoration-line-through">Rp.1250.000</span>
                        </h4>
                        <p>Jum, 27 Des - Sab, 28 Des | 1 Kamar, 2 Tamu</p>
                        <p>Your savings: <span class="text-danger fw-bold">Rp.400.000</span></p>
                        <hr>
                        <h5>Total Price: <span class="fw-bold">Rp.750.000</span></h5>
                        <button class="btn btn-primary btn-lg w-100 mt-3">PESAN SEKARANG!!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
