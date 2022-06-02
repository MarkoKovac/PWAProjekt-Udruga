<?php include("path.php"); 
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
          <h1>O nama</h1>
          <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
          responsive, mobile-first projects on the web.</p>
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
        <img src="https://via.placeholder.com/1080x720" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Naši Članovi</span></h2>
        <p class="lead">Trenutno u udruzi brojimo 4 aktivna člana, dok na skrbi imamo 80-ak pasa i mačaka. Većina ih se nalazi u našem utočištu, koje dijele s dvoje volontera, našom predsjednicom Tihanom te njenim zaručnikom Damirom.</p>
      </div>
      <div class="col-md-5 order-md-1 my-auto">
        <img src="https://via.placeholder.com/1080x720" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Cilj Udruge</h2>
        <p class="lead">Naš cilj i ključni dio naše misije je pomaganje životinjama od kojih drugi okreću glave jer su bolesne, teško udomljive ili stare (skupina na koju smo posebno slabi). Zbog toga smo početkom 2021. godine, nakon što je dio Hrvatske pogodio jedan od najrazornijih potresa ikad zabilježenih, iz zahvaćenih područja preuzeli 94 psa među kojima je najveći postotak upravo ovih “neprimjetnih”.</p>
      </div>
      <div class="col-md-5 my-auto">
        <img src="https://via.placeholder.com/1080x720" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>

  <div class="container-fluid" style="background-color: rgb(255, 184, 184);">
    <div class="container text-white fw-bold">
      <div class="row text-center d-flex justify-content-between">
        <div class="col-md-4 col-12 p-md-4 p-3">
            <span class="fs-1">350+</span>
            <p class="fs-4">Ukupno udomljenih životinja</p>
        </div>
        <div class="col-md-4 col-12 p-md-4 p-3">
            <span class="fs-1">80+</span>
            <p class="fs-4">Životinja za koje trenutno brinemo</p>
        </div>
        <div class="col-md-4 col-12 p-md-4 p-3">
          <span class="fs-1">90+</span>
          <p class="fs-4">Pasa iz potresom potresenih područja</p>
      </div>
      </div>
    </div>
  </div>

  <hr class="w-75 mx-auto">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-10">
        <h2 class="py-3 text-center">Najčešće postavljena pitanja</h2>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            Accordion Item #4
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
            Accordion Item #5
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
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