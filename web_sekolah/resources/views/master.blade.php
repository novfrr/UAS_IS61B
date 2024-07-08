<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>

    <div id="page-container" class="sidebar-o sidebar-dark side-overlay-hover enable-page-overlay side-scroll page-header-fixed main-content-narrow">


      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
              <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Toggle Sidebar Style -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <!-- END Toggle Sidebar Style -->

              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                <i class="far fa-moon" id="dark-mode-toggler"></i>
              </button>
              <!-- END Dark Mode -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
<div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                    <i class="nav-main-link-icon fa fa-fw fa-user"></i>
                    <span class="nav-main-link-name">Profile</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                    <i class="nav-main-link-icon fa fa-fw fa-graduation-cap"></i>
                    <span class="nav-main-link-name">Kelas</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                    <i class="nav-main-link-icon fa fa-fw fa-money-bill"></i>
                    <span class="nav-main-link-name">Pembayaran</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                    <i class="nav-main-link-icon fa fa-fw fa-file-alt"></i>
                    <span class="nav-main-link-name">Nilai</span>
                </a>
            </li>
        </ul>
        <!-- Logout -->
        <div class="nav-main-item mt-auto">
            <a class="nav-main-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="nav-main-link-name">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- END Logout -->
    </div>
    <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->

      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
            </button>
            <!-- END Open Search Section -->
          </div>
          <!-- END Left Section -->

        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-fw fa-times-circle"></i>
                  </button>
                  <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <div class="row">
            <!-- About Section -->
            <div class="col-md-8">
              <div class="block block-rounded">
                <div class="block-content">
                  <h2>About Sekolah Contoh</h2>
                  <p>Sekolah Contoh adalah sekolah yang berdedikasi untuk memberikan pendidikan berkualitas kepada para siswa. Kami memiliki visi untuk menjadi pusat pembelajaran terbaik di wilayah ini.</p>
                  <p>Kami menawarkan berbagai program pendidikan mulai dari tingkat TK hingga SMA, dengan fokus pada pengembangan akademik dan karakter siswa.</p>
                  <p>Alamat kami terletak di Jalan Contoh No. 123, Contoh Kota. Jika Anda ingin lebih tahu tentang kami, jangan ragu untuk menghubungi kami di (123) 456-7890 atau melalui email di info@sekolahcontoh.com.</p>
                  <p>Terima kasih atas kunjungan Anda!</p>
                </div>
              </div>
            </div>
            <!-- END About Section -->
            <!-- Additional Section -->
            <div class="col-md-4">
              <div class="block block-rounded">
                <div class="block-header">
                  <h3 class="block-title">Data Sekolah</h3>
                </div>
                <div class="block-content">
                  <ul class="list list-unstyled">
                    <li><i class="fa fa-fw fa-map-marker-alt text-primary"></i> Jalan Contoh No. 123, Contoh Kota</li>
                    <li><i class="fa fa-fw fa-phone-alt text-primary"></i> (123) 456-7890</li>
                    <li><i class="fa fa-fw fa-envelope text-primary"></i> info@sekolahcontoh.com</li>
                    <li><i class="fa fa-fw fa-globe text-primary"></i> <a href="#" target="_blank">www.sekolahcontoh.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Additional Section -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->


      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://pixelcave.com/products/dashmix" target="_blank">Dashmix 5.9</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/dashmix.app.min.js"></script>
  </body>
</html>
