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
  <title>LePas Udruga za zaštitu životinja</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awesome ikone-->
  <script src="https://kit.fontawesome.com/1c5108fa97.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!--Header-->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!--Jumbotron-->
  <div class="container-fluid p-2  p-md-5" style="background-color: rgb(248, 183, 183);">
    <div class="container">
      <div class="jumbotron">
        <h1>Kontakti</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
          responsive, mobile-first projects on the web.</p>
      </div>
    </div>
  </div>

  <!-- Wrapper container -->
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6 col-12">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
          </div>
          <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">Form submission successful!</div>
          </div>
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 col-12 text-center">
        <p class="fs-3">Adresa gdje možete doći pogledati i prošetati pse</p>
        <p class="fs-4">adresaaa, 30</p>
        <hr class="w-75 mx-auto">
        <p class="fs-3">Broj telefona za hitne slučajeve</p>
        <p class="fs-4">0997577693</p>
        <hr class="w-75 mx-auto">
        <p class="fs-3">G-mail</p>
        <p class="fs-4">lepas@gmail.com</p>
      </div>
    </div>
  </div>

  <!-- 21:9 aspect ratio -->
  <div class="ratio ratio-21x9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88945.59460041238!2d15.894292063254266!3d45.84029414735702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d692c902cc39%3A0x3a45249628fbc28a!2sZagreb!5e0!3m2!1shr!2shr!4v1650573738812!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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