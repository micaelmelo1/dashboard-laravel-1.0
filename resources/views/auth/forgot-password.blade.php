<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Title -->
    <title>Recuperar senha</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="site/css/vendor.min.css" />
    <link rel="stylesheet" href="site/css/theme.minc619.css?v=1.0" />
    <link rel="stylesheet" href="site/css/toastr.css" />
    <link rel="stylesheet" href="site/css/menu.css" />
</head>

<body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="
          height: 100%;
          background-image: url(site/svg/components/login-background.png);
        "></div>
        <!-- Content -->
        <br><br>
        <br>
        <div class="container py-5 py-sm-7">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <!-- Card -->
                    <div class="card card-lg mb-5">
                        <div class="card-body">

                            <!-- Form -->
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="text-center">
                                    <div class="logo" data-mobile-logo="images/pizzaria_delivery.jpg" data-sticky-logo="images/pizzaria_delivery.jpg">
                                        <a href="/"><img src="images/pizzaria_delivery.jpg" alt="header-logo" /></a>
                                    </div>
                                    <div class="mb-5">
                                        <h4>
                                            Esqueceu sua senha? Sem problemas. Basta nos informar
                                            seu endereço de e-mail e nós lhe enviaremos um link de
                                            redefinição de senha que permitirá que você escolha uma
                                            nova.
                                        </h4>
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label text-capitalize" for="email">
                                        <h4> Email</h4>
                                    </label>

                                    <input type="email" class="form-control form-control-lg" name="email" :value="old('email')" id="email" tabindex="1" placeholder="exemplo@exemplo.com" required autofocus />
                                </div>
                                <!-- End Form Group -->

                                <div class="bg-salmon text-center">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary">
                                        Enviar link de redefinição de senha.
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Implementing Plugins -->
    <script src="site/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="site/js/theme.min.js"></script>
    <script src="site/js/toastr.js"></script>
</body>

</html>