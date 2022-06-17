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
        <p>Ovdje možete saznati kako pomoći udruzi, postati teta čuvalica, uzeti životinju na privremeni smještaj ili nam pomoći sa šetnjom. Isto tako puno bi nam značilo ako bi mogli pomoći novčanom donacijom kako bi mogli razvijati udrugu i pomagati sve većoj količini životinja.</p>
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
        <h2 class="featurette-heading">Donacije</h2>
        <p class="lead">Kako biste pomogli njuškicama moguće je donirati različite stvari ili usluge.
                        Osnovne potrepštine: deke, plahte, ručnici, upijajući podlošci, ogrlice, povodci, stari krevetići, stare igračke... (sve što vam više nije potrebno, ili se možda toga želite riješiti - našim njuškicama će dobro doći).
                        Postanite teta/striček čuvalica (privremeni udomitelj).
                        Donirajte hranu - posebno nam nedostaje starter klopice za štence i male mace (suhe i konzervice), te različite medicinske hrane za naše njuške u oporavku (gastrointenstinal, gastrointestinal low fat, renal…)
                        Možete uskočiti s potrebnim prijevozima šapica od utočišta ili trenutne čuvalice do veterinara i natrag
                        Izvršenje uplate na račun - odricanjem čak i jedne kave dnevno, pomažete u procesu njihovog spašavanja jer ćemo moći lakše pokriti različite veterinarke troškove 
</p>
      </div>
      <div class="col-md-5 my-auto">
        <img src="assets/images/donacije1.png" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Privremeni Smještaj</span></h2>
        <p class="lead">Imate volju i vremena pomoći, ali niste sigurni kako biste to najbolje mogli?
                        Jedan od izuzetno vrijednih oblika pomoći jest privremeno čuvanje, odnosno - postati teta ili striček čuvalica!
                        Što to znači?
                        Biti čuvalica znači primiti psa u svoj dom na oporovaka ili smještaj do njegovog udomljenja.
                        Udruga za svo razdoblje čuvanja osigurava hranu i potrepštine za psa ili mačku te prijevoz do veterinara. Vi s druge strane osiguravate ljubav, pažnju i osnovni odgoj :)
                        Kontakt forma u ovom dijelu za ljude koji žele čuvati:
                        U formi da se traže podaci: ime, prezime, mail, kontakt, kakvog dosadašnjeg iskustva imaju sa psima/mačkama te forma za upload slika njihovog stambenog prostora, link za čuvalice</p>
      </div>
      <div class="col-md-5 order-md-1 my-auto">
        <img src="assets/images/donacije2.png" alt="" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Šetnje</h2>
        <p class="lead">Imamo 50-ak pasa koje je potrebno išetavati i to svaki dan nekoliko puta.
                        Ukoliko biste naš rad željeli podržati kroz šetnju naših šapica, rado ćemo vas ugostiti.
                        Također, ukoliko ste se možda odlučili za udomljenje jedne od naših njuškica, ovo je odličan način da se bolje upoznate.
                        Molimo vas da nas prije dolaska kontaktirate na mail udruge: udruga@lepas.hr</p>
      </div>
      <div class="col-md-5 my-auto">
        <img src="assets/images/donacije3.png" alt="" width="100%">
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