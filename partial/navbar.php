<div class="py-1 bg-primary">
  <div class="container">
    <div class="row no-gutters mt-1 align-items-center">
      <div class="col-12 header-info-row text-white">
        <div class="info-item">
          <div class="icon mr-2"><span class="icon-phone2"></span></div>
          <span>(021) 5518121</span>
        </div>
        <div class="info-item">
          <div class="icon mr-2"><span class="icon-paper-plane"></span></div>
          <span>support@shinehoneytomat.com</span>
        </div>
        <div class="info-item">
          <div class="icon mr-2"><span class="icon-clock-o"></span></div>
          <span>Hari Kerja: 08:00 ~ 17:00 WIB</span>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="ftco-navbar">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="images/logo.png" style="height:50px; margin-right:8px;" alt="Logo">
      <a class="navbar-brand mb-0 h1" href="index.php">
        <span style="color:#ff9d00;">Shine</span> Honey Tomato
      </a>
    </div>

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#ftco-nav"
      aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span>
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="index.php" class="nav-link">Beranda</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navTentang"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tentang
          </a>
          <div class="dropdown-menu" aria-labelledby="navTentang">
            <a class="dropdown-item" href="pengantar.php">Pengantar</a>
            <a class="dropdown-item" href="pengenalan.php">Pengenalan Perusahaan</a>
            <a class="dropdown-item" href="visimisi.php">Visi Perusahaan</a>
            <a class="dropdown-item" href="lokasi.php">Lokasi Perusahaan</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navBisnis"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bisnis
          </a>
          <div class="dropdown-menu" aria-labelledby="navBisnis">
            <a class="dropdown-item" href="bisnis.php">Tentang Bisnis</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navProduk"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produk
          </a>
          <div class="dropdown-menu" aria-labelledby="navProduk">
            <a class="dropdown-item" href="produk.php">Tentang Produk</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navKomunitas"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Komunitas
          </a>
          <div class="dropdown-menu" aria-labelledby="navKomunitas">
            <a class="dropdown-item" href="pengumuman.php">Pengumuman</a>
          </div>
        </li>
      </ul>
    </div>

  </div>
</nav>

<script>
  const toggle = document.querySelector(".dropdown-toggle");
  const menu = document.querySelector(".dropdown-menu");
  const items = document.querySelectorAll(".dropdown-item");

  toggle.addEventListener("click", function(e) {
    e.stopPropagation();
    menu.classList.toggle("show");
  });

  items.forEach(item => {
    item.addEventListener("click", function(e) {
      e.stopPropagation();
      console.log("Selected:", this.textContent);
      menu.classList.remove("show");
    });
  });

  document.addEventListener("click", function(e) {
    if (!menu.contains(e.target) && !toggle.contains(e.target)) {
      menu.classList.remove("show");
    }
  });

  document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
    menu.addEventListener('click', function(e) {
      e.stopPropagation(); // cegah dropdown auto-close
    });
  });

  document.addEventListener("DOMContentLoaded", function() {

    const items = document.querySelectorAll(".info-item");

    function isMobile() {
      return window.innerWidth < 768;
    }

    if (isMobile()) {
      let idx = 0;

      function showNext() {
        items.forEach(item => {
          item.classList.remove("active", "fade-out");
        });

        const next = items[idx];
        next.classList.add("active");

        setTimeout(() => {
          next.classList.remove("active");
          next.classList.add("fade-out");
        }, 2400);

        idx = (idx + 1) % items.length;
      }

      showNext();
      setInterval(showNext, 3000);
    } else {
      items.forEach(item => item.classList.add("active"));
    }
  });
</script>



<style>
  .header-info-row {
    position: relative;
    min-height: 32px;
    overflow: hidden;
  }

  .info-item {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;

    display: flex;
    align-items: center;

    opacity: 0;
    pointer-events: none;
  }

  .info-item.active {
    opacity: 1;
    pointer-events: auto;
    animation: fadeIn 0.6s forwards;
  }

  .info-item.fade-out {
    opacity: 0;
    animation: fadeOut 0.6s forwards;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
    }

    to {
      opacity: 0;
    }
  }

  @media (min-width: 768px) {
    .header-info-row {
      display: flex;
      justify-content: space-between;
      min-height: auto;
      position: static;
    }

    .info-item {
      position: static;
      opacity: 1 !important;
      display: flex !important;
      animation: none !important;
      pointer-events: auto;
    }
  }

  .dropdown-menu {
    display: none;
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.2s ease, transform 0.2s ease;
  }

  .dropdown-menu.show {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }
</style>