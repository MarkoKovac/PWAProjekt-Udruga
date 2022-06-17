<?php
include("path.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakti - LePas Udruga za zaštitu životinja</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico"/>
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

  <!--Jumbotron-->
  <div class="container-fluid p-2  p-md-5" style="background-color: rgb(248, 183, 183);">
    <div class="container">
      <div class="jumbotron">
        <h1>Kontakti</h1>
        <p>Ovdje možete saznati našu lokaciju i na koje nas sve načine možete kontaktirati. </p>
      </div>
    </div>
  </div>

  <!-- Wrapper container -->
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6 col-12 mb-3">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="mb-3">
            <label class="form-label" for="name">Ime i Prezime</label>
            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="name:required">Ovo polje je obavezno</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Adresa</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Ovo polje je obavezno</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email adresa ne postoji</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="message">Poruka</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Ovo polje je obavezno</div>
          </div>
          <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">Poruka uspješno poslana</div>
          </div>
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Greška prilikom slanja poruke</div>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Pošalji</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 col-12 mb-3 text-center">
        <p class="fs-3"><b>Naša adresa</b></p>
        <p class="fs-4">adresaaa, 30</p>
        <hr class="w-75 mx-auto">
        <p class="fs-3"><b>Broj telefona za hitne slučajeve</b></p>
        <p class="fs-4">0997577693</p>
        <hr class="w-75 mx-auto">
        <p class="fs-3"><b>G-mail</b></p>
        <p class="fs-4">lepas@gmail.com</p>
      </div>
    </div>
  </div>

  <!-- 21:9 aspect ratio -->
  <div class="ratio ratio-21x9">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89171.55397814639!2d15.99680665966591!3d45.69877679833686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4766876780b60347%3A0x400ad50862bb790!2sVelika%20Gorica!5e0!3m2!1shr!2shr!4v1655400816856!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- Footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!--Separate Popper i Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- SB Forms JS -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>