<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/animals.php");

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
        <h1>Udomite psa ili macku</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
          responsive, mobile-first projects on the web.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container d-flex justify-content-between">
    <button type="button" class="btn btn-secondary h-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      <i class="fa fa-filter"></i> filter
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="udomi.php" method="GET" id="form1">
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Vrsta</legend>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vrsta" id="vrsta1" value="Pas">
                    <label class="form-check-label" for="vrsta1">
                      Pas
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vrsta" id="vrsta2" value="Macka">
                    <label class="form-check-label" for="vrsta2">
                      Mačka
                    </label>
                  </div>
                  </div>
                </div>
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Spol</legend>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="spol" id="spol1" value="Musko">
                  <label class="form-check-label" for="spol1">
                    Muško
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="spol" id="spol2" value="Zensko">
                  <label class="form-check-label" for="spol2">
                    Žensko
                  </label>
                </div>
                  </div>
                </div>
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Velicine</legend>
                  <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="velicina" id="velicina1" value="Mali">
                  <label class="form-check-label" for="velicina1">
                    Mali
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="velicina" id="velicina2" value="Srednji">
                  <label class="form-check-label" for="velicina2">
                    Srednji
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="velicina" id="velicina2" value="Veliki">
                  <label class="form-check-label" for="velicina2">
                    Veliki
                  </label>
                </div>
                  </div>
                </div>
              </fieldset>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="form1" class="btn btn-dark" style="background-color: rgb(238, 135, 135);" >Trazi</button>
            </div>

            </form>

          </div>

        </div>
      </div>
    </div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Od najnovijeg prema najstarijem</a></li>
        <li><a class="dropdown-item" href="#">Od najstarijeg prema najnovijem</a></li>
      </ul>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row pt-3">

    <?php
      if(isset($_GET['vrsta']) && isset($_GET['spol']) && isset($_GET['velicina'])){
          $animals = selectAll('animals', ['published' => 1,'vrsta' => $_GET['vrsta'],'spol' => $_GET['spol'], 'velicina' => $_GET['velicina']]);
      } else {
          $animals = selectAll('animals', ['published' => 1]);
      }
    foreach (array_reverse($animals) as $key => $animal): ?>

      <div class="col-lg-3 col-6 pb-lg-0 pb-3 mb-4">
          <a href="#" class="card-link">
            <div class="card">
              <img class="card-img-top" src="<?php echo BASE_URL . '/assets/images/' . $animal['image']; ?>" alt="Card image cap">  
              <div class="card-body">
                  <h5 class="card-title"><?php echo $animal['title']; ?></h5>
                  <p class="card-text"><?php echo $animal['spol'];?></p>
              </div>
            </div>
          </a>  
        </div>

    <?php endforeach; ?>

    </div>
  </div>

  <!-- Footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!--Separate Popper i Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>