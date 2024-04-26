<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Sims Web App</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

    {{-- <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}

    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

</head>

<body class="hold-transition login-page" style="
    flex-direction: row;">

    @include('sweetalert::alert')
     <div class="login-box" style="  
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        background-color: #FFFFFF;">

        <div class="card card-outline card-primary" style="border-top: none;box-shadow:none;">
            <div class="card-header text-center" style="border-bottom: none;">
            <div class="title-icon" style="
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;">
                <div class="icon" style="
                width: 25px;
                background-image: url('/assets/img/Handbag.png');
                background-size: cover; 
                background-repeat: no-repeat; 
                height: 30px;"
            ></div>
                <p style="font-size: 20px;"><b>SIMS Web App</b></p>
            </div>
                <p style="font-size: 23px;"><b>Masuk atau buat akun <br>untuk memulai</b></p>
            </div>
            <div class="card-body" style="padding:0;">
                <form class="needs-validation" novalidate action="/login" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <div class="side-login" style="
    width: 100%;
    background-image: url('/assets/img/side-login.png');
    background-size: cover; 
    background-repeat: no-repeat; 
    height: 100%;">
    </div>

    <script src="/assets/plugins/jquery/jquery.min.js"></script>

    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>
