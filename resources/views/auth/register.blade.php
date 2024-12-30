

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Register | Traveloop</title>
    <style>
        body {
            background: #ececec;
        }

        .box-area {
            width: 930px;
        }

        .right-box {
            padding: 40px 30px 40px 40px;
        }

        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body class="w-vw-100 overflow-x-hidden">
    <div class="row border rounded-5 p-3 bg-white" style="height: 100vh !important">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe">
                <p class="text-white fs-2" style="font-weight: 600">
                    Find Your Perfect Stay
                </p>
                <small class="text-white text-wrap text-center" style="width: 17rem">
                    Book your dream hotel with ease and comfort</small>
            </div>

            <div class="col-md-6 right-box d-flex align-items-center">
                <div class="row align-items-center w-100">
                    <form action="{{ route('auth.registerVerify') }}" method="POST">
                        @csrf
                        <div class="header-text mb-4">
                            <h2>Create an Account</h2>
                            <p>Join us to start booking your perfect stay.</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror"
                                placeholder="Name" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                                placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                                placeholder="Password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="confirm_password"
                                class="form-control form-control-lg bg-light fs-6 @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" />
                            @error('confirm_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" />
                                <label for="formCheck" class="form-check-label text-secondary"><small>I agree to the
                                        Terms
                                        and Conditions</small></label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Register
                            </button>
                        </div>

                        <div class="row">
                            <small>Already have an account? <a href="{{ route('login') }}">Login here</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
