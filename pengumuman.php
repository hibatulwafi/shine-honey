<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once 'partial/head.php';
  ?>
</head>

<body class="goto-here">

  <?php
  include_once 'partial/navbar.php';
  ?>

  <div class="hero-wrap hero-bread" style="background-image: url('images/sub_visual02.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><span>Komunitas</span></p>
          <h1 class="mb-0 bread">Pengumuman</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h3 class="mb-4">Jika Anda memiliki pertanyaan, kami akan merespons sesegera mungkin.</h3>
        </div>

        <div class="col-md-12 col-lg-12">
          <form action="#" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Judul">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  include_once 'partial/footer.php';
  include_once 'partial/script.php';
  ?>


</body>

</html>