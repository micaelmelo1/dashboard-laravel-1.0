<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Title -->
    <title>Cadastro</title>

    <!-- Favicon -->
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
    <link rel="stylesheet" href="site/vendor/icon-set/style.css" />
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="site/css/theme.minc619.css?v=1.0" />
    <link rel="stylesheet" href="site/css/toastr.css" />
</head>

<body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="
          height: 100%;
          background-image: url(site/svg/components/login-background.png);
        "></div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <!-- Card -->

                    <div class="card card-lg mb-8">
                        <div class="card-body">

                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="">
                                    <h1 class="display-4">CADASTRO</h1>
                                    <br />
                                </div>
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label text-capitalize" for="name">
                                        <h4>Nome</h4>
                                    </label>
                                    <input type="text" class="form-control form-control-lg" name="name" id="name" :value="old('name')" tabindex="1" placeholder="Nome completo" autofocus />
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="input-label" for="email">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="exemplo@email.com" :value="old('email')" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="input-label" for="cell">
                                                <h4>Celular</h4>
                                            </label>
                                            <input type="text" name="cell" cell="cell" class="form-control" placeholder="(48) 9 9999-9999" :value="old('cell')" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="js-form-message form-group">
                                    <label class="input-label text-capitalize" for="endr">
                                        <h4>Endereço de entrega</h4>
                                    </label>
                                    <input type="text" class="form-control form-control-lg" name="endr" id="endr" tabindex="1" placeholder="Endereço completo" :value="old('endr')" required />
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="input-label" for="password">
                                                <h4>Senha</h4>
                                            </label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="*********" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="input-label" for="password_confirmation">
                                                <h4>Confirme a senha</h4>
                                            </label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="********" id="password_confirmation" required />
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->

                                <div class="row">
                                    <div class="col-md-3 col-0">
                                        <div class="form-group">
                                            <a href="/">
                                                <button type="button" class="btn btn-lg btn-block btn-primary">
                                                    voltar
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-0"></div>
                                    <div class="col-md-3 col-0">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-block btn-primary">
                                                Cadastrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Checkbox -->
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