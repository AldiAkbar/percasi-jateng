  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img') }}/logo-percasi.png" alt="">
        <h1>PERCASI JATENG</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/pengurus-inti">Pengurus Inti</a></li>
              <li><a href="/pengurus-cabang">Pengurus Cabang</a></li>
              <li><a href="#">AD/ART</a></li>
              <li><a href="/galeri">Galeri</a></li>
              <li><a href="/about">Tentang</a></li>
            </ul>
          </li>
          <li><a href="/agenda">Agenda</a></li>
          <li class="dropdown"><a href="#"><span>Atlet</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/atlet-pon">PON</a></li>
              <li><a href="/atlet-daerah">Daerah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Turnamen</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://www.chess.com/article/view/world-chess-championship-2023">Internasional</a></li>
              <li><a href="https://festival.catur.id/">Nasional</a></li>
              <li><a href="#">Daerah</a></li>
              <li><a href="https://www.chess.com/id/tournaments">Online</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->