<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Title -->
    <title>site</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="images/apple-touch-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="images/apple-touch-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="images/apple-touch-icon-76x76.png"
    />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap"
      rel="stylesheet"
    />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="site/css/vendor.min.css" />
    <link rel="stylesheet" href="site/css/theme.minc619.css?v=1.0" />
    <link rel="stylesheet" href="site/css/toastr.css" />
    <link rel="stylesheet" href="site/css/menu.css" />
  </head>

  <body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
      <div
        class="position-fixed top-0 right-0 left-0 bg-img-hero"
        style="
          height: 100%;
          background-image: url(site/svg/components/login-background.png);
        "
      ></div>

      <!-- Content -->
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="card col-md-5 col-lg-5">
            <!-- Card -->
            <div class="card-body">
              <!-- Form -->
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center">
                  <div
                    class="logo"
                    data-mobile-logo="images/pizzaria_delivery.jpg"
                    data-sticky-logo="images/pizzaria_delivery.jpg"
                  >
                    <a href="/"
                      ><img
                        src="images/pizzaria_delivery.jpg"
                        alt="header-logo"
                    /></a>
                  </div>

                  <div class="mb-5">
                    <h1 class="display-4">ENTRAR</h1>
                    <p>
                      Ainda não é cadastrado?
                      <a href="/register"> Cadastre-se </a>
                    </p>
                  </div>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label text-capitalize" for="email">
                    <h4>Email</h4>
                  </label>

                  <input
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    :value="old('email')"
                    id="email"
                    tabindex="1"
                    placeholder="exemplo@exemplo.com"
                    required
                    autofocus
                  />
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="password" tabindex="0">
                    <span
                      class="d-flex justify-content-between align-items-center"
                    >
                      <h4>Senha</h4>
                    </span>
                  </label>

                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      class="js-toggle-password form-control form-control-lg"
                      name="password"
                      id="password"
                      placeholder="********"
                      required
                      autocomplete="current-password"
                      data-hs-toggle-password-options='{
                                                     "target": "#changePassTarget",
                                            "defaultClass": "tio-hidden-outlined",
                                            "showClass": "tio-visible-outlined",
                                            "classChangeTarget": "#changePassIcon"
                                            }'
                    />
                    <div id="changePassTarget" class="input-group-append">
                      <a class="input-group-text" href="javascript:">
                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <label for="remember_me" class="inline-flex items-center">
                      <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember"
                      />
                      <span class="ml-2 text-sm text-gray-600"
                        >{{ __('Lembre me') }}</span
                      >
                    </label>
                  </div>
                </div>
                <div class="flex items-left justify-end mt-4">
                  @if (Route::has('password.request'))
                  <a
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('password.request') }}"
                  >
                    {{ __('Esqueceu sua senha?') }}
                  </a>
                  @endif
                </div>
                <br />
                <!-- End Checkbox -->
                <div class="bg-salmon text-center">
                  <button
                    type="submit"
                    class="btn btn-lg btn-block btn-primary"
                  >
                    Entrar
                  </button>
                </div>
              </form>
              <!-- End Form -->
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
