<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="img/bayarSPP-5.png">

    <title>bayarSPP | ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-100 col-lg-200col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="text-center">
                        <img src="img/bayarSPP-5.png" class="main-logo" width="80" alt="Awesome Image" />
                        <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                            </div>
                            <form class="user" action="/registerr" method="post">
                                @csrf 
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                                        placeholder="Nama Sekolah" required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback text-left">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email Sekolah" required value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback text-left">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="alamat"
                                        placeholder="Alamat" required value="{{ old('alamat') }}">
                                    @error('alamat')
                                    <div class="invalid-feedback text-left">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password"
                                            placeholder="Password" required>
                                        @error('password')
                                        <div class="invalid-feedback text-left">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password"
                                            placeholder="Konfirmasi password" required>
                                    </div>
                                </div>

                                <br>
                                
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Registrasi
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/forgot-passwordd">Lupa Kata Sandi?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah Punya Akun? Login!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>