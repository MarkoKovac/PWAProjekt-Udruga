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
  <title>Donacije - LePas Udruga za zaštitu životinja</title>
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
        <h1>Donacije i volontiranje</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
          responsive, mobile-first projects on the web.</p>
      </div>
    </div>
  </div>

  
  <div class="container p-5">
    <div class="row text-center">
    <div class="col-md-4 col-12">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-info fa-stack-1x fa-inverse"></i>
        </span>
        <h2>Volonterstvo</h2>
        <p>Šetnje</p>
        <p>Privremeni smještaj</p>
        <p>Postani teta čuvalica</p>
        <a class="link-danger" href="">Saznaj više</a>
        <p></p>
      </div>
      <hr class="d-sm-none d-inline">
      <div class="col-md-4 col-12">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-box fa-stack-1x fa-inverse"></i>
        </span>
        <h2>Donacije potrepština</h2>
        <p>Hrana</p>
        <p>Ogrlice</p>
        <p>Povodci</p>
        <p>Zdjelice</p>
      </div>
      <hr class="d-sm-none d-inline">
      <div class="col-md-4 col-12">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-dollar-sign fa-stack-1x fa-inverse"></i>
        </span>
        <h2>Novčane uplate</h2>
        <p>IBAN: HR3923600001102884721</p>
        <p>SWIFT: ZABAHR2X</p>
        <p>PAYPAL: udruga@lepas.hr</p>
        <p>KEKSPAY: 0981397298</p>
      </div>
    </div>
  </div>

  <div class="container">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">O Udruzi</h2>
        <p class="lead">LePas je mlada udruga za dobrobit i zaštitu životinja koja je službeno s radom započela 11. rujna 2020. godine, no članovi udruge već su godinama aktivni i vrlo iskusni volonteri koji iza sebe imaju jako velik broj spašenih života i udomljenih životinja.</p>
      </div>
      <div class="col-md-5 my-auto">
        <img src="assets/images/onama1.png" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Naši Članovi</span></h2>
        <p class="lead">Trenutno u udruzi brojimo 4 aktivna člana, dok na skrbi imamo 80-ak pasa i mačaka. Većina ih se nalazi u našem utočištu, koje dijele s dvoje volontera, našom predsjednicom Tihanom te njenim zaručnikom Damirom.</p>
      </div>
      <div class="col-md-5 order-md-1 my-auto">
        <img src="assets/images/onama2.png" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Cilj Udruge</h2>
        <p class="lead">Naš cilj i ključni dio naše misije je pomaganje životinjama od kojih drugi okreću glave jer su bolesne, teško udomljive ili stare (skupina na koju smo posebno slabi). Zbog toga smo početkom 2021. godine, nakon što je dio Hrvatske pogodio jedan od najrazornijih potresa ikad zabilježenih, iz zahvaćenih područja preuzeli 94 psa među kojima je najveći postotak upravo ovih “neprimjetnih”.</p>
      </div>
      <div class="col-md-5 my-auto">
        <img src="assets/images/onama3.png" alt="" width="100%">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!--Separate Popper i Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>