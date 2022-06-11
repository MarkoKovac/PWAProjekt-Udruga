<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
$posts = selectAll('posts', ['published' => 1]);
$animals = selectAll('animals', ['published' => 1]);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Marko Kovac">
  <title>LePas Udruga za zaštitu životinja</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awesome ikone-->
  <script src="https://kit.fontawesome.com/1c5108fa97.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/script.js" defer></script>
</head>

<body>
  <!--Header-->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!--Carousel-->
  <div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="https://bootstrapcreative.com/">
            <picture>
              <source srcset="assets/images/carousel-image-1/1.png" media="(min-width: 1400px)">
              <source srcset="assets/images/carousel-image-1/2.png" media="(min-width: 769px)">
              <source srcset="assets/images/carousel-image-1/3.png" media="(min-width: 577px)">
              <img srcset="assets/images/carousel-image-1/4.png" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="carousel-caption justify-content-center align-items-center">
              <div>
                <h2>Every project begins with a sketch</h2>
                <p>We work as an extension of your business to explore solutions</p>
                <span class="btn btn-sm btn-outline-secondary">Our Process</span>
              </div>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="https://bootstrapcreative.com/">
            <picture>
              <source srcset="assets/images/carousel-image-2/1.png" media="(min-width: 1400px)">
              <source srcset="assets/images/carousel-image-2/2.png" media="(min-width: 769px)">
              <source srcset="assets/images/carousel-image-2/3.png" media="(min-width: 577px)">
              <img srcset="assets/images/carousel-image-2/4.png" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="carousel-caption justify-content-center align-items-center">
              <div>
                <h2>Every project begins with a sketch</h2>
                <p>We work as an extension of your business to explore solutions</p>
                <span class="btn btn-sm btn-outline-secondary">Our Process</span>
              </div>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="https://bootstrapcreative.com/">
            <picture>
              <source srcset="assets/images/carousel-image-3/1.png" media="(min-width: 1400px)">
              <source srcset="assets/images/carousel-image-3/2.png" media="(min-width: 769px)">
              <source srcset="assets/images/carousel-image-3/3.png" media="(min-width: 577px)">
              <img srcset="assets/images/carousel-image-3/4.png" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="carousel-caption justify-content-center align-items-center">
              <div>
                <h2>Every project begins with a sketch</h2>
                <p>We work as an extension of your business to explore solutions</p>
                <span class="btn btn-sm btn-outline-secondary">Our Process</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="container p-5">
    <div class="row">
      <div class="col text-center">
        <img src="logo.png" alt="">
        <p>LePas je mlada udruga za dobrobit i zaštitu životinja koja je službeno s radom započela 11. rujna 2020. godine,
          no članovi udruge već su godinama aktivni i vrlo iskusni volonteri koji iza sebe imaju jako velik broj spašenih života i udomljenih životinja.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: rgb(255, 184, 184);">
    <div class="container text-white fw-bold">
      <div class="row text-center d-flex justify-content-between">
        <div class="col-md-4 col-12 p-md-4 p-3">
          <span id="count1">0</span>
          <p class="fs-4">Ukupno udomljenih životinja</p>
        </div>
        <div class="col-md-4 col-12 p-md-4 p-3">
          <span id="count2">0</span>
          <p class="fs-4">Životinja za koje trenutno brinemo</p>
        </div>
        <div class="col-md-4 col-12 p-md-4 p-3">
          <span id="count3">0</span>
          <p class="fs-4">Pasa iz potresom zahvacenih područja</p>
        </div>
      </div>
    </div>
  </div>
  <!--PesekiMace-->
  <div class="container">
    <div class="row d-flex justify-content-around m-3">
      <h2 class="text-center">Udomi</h2>
      <div class="col-5 text-center">
        <a href="#">
          <img src="https://via.placeholder.com/301x301" alt="" class="rounded-circle w-75">
          <p>Udomi peseka</p>
        </a>
      </div>
      <div class="col-5 text-center">
        <a href="#">
          <img src="https://via.placeholder.com/301x301" alt="" class="rounded-circle w-75">
          <p>Udomi macu</p>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4" style="background-color: rgb(226, 226, 226);">
    <div class="container">
      <h2 class="text-center">Naši Najnoviji Članovi</h2>
      <div class="row pt-3">

        <?php
        $i = 0;
        foreach (array_reverse($animals) as $key => $animal) :
          if ($i >= 4) break; ?>

          <div class="col-lg-3 col-6 pb-lg-0 pb-3">
            <a href="#" class="card-link">
              <div class="card h-100">
                <img class="card-img-top"  src="<?php echo BASE_URL . '/assets/images/' . $animal['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $animal['title']; ?></h5>
                  <p class="card-text"><?php echo $animal['spol']; ?></p>
                </div>
              </div>
            </a>
          </div>

        <?php $i++;
        endforeach; ?>

      </div>
    </div>
  </div>
  <div class="container pt-3">
    <h2 class="text-center">Naše Novosti</h2>
    <div class="row pt-3">
      <?php

      $i = 0;
      foreach (array_reverse($posts) as $key => $post) :
        if ($i >= 3) break; ?>

        <div class="col-lg-4 col-12 pb-lg-0 pb-3">
          <a href="#" class="card-link">
            <div class="card">
              <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" width="100%">
              <hr>
              <div class="card-body">
                <h5 class="card-title"><?php echo $post['title']; ?></h5>
              </div>
              <div class="card-footer text-muted">
                <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
              </div>
            </div>
          </a>
        </div>

      <?php $i++;
      endforeach; ?>

    </div>
  </div>

  <!-- Footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!--Separate Popper i Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>