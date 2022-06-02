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
                    <form action="/action_page.php">
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Vrsta</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                  <label class="form-check-label" for="gridRadios1">
                                   Pas
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
                                    Macka
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
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios1" value="option1">
                                  <label class="form-check-label" for="gridRadios1">
                                   Muško
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
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
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios1" value="option1">
                                  <label class="form-check-label" for="gridRadios1">
                                    Mali
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
                                    Srednji
                                  </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Veliki
                                    </label>
                                  </div>
                              </div>
                            </div>
                          </fieldset>            
                    </form>        
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn" style="background-color: rgb(238, 135, 135);">Trazi</button>
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
          <li><a class="dropdown-item" href="#">Najstarijie zivotinje</a></li>
          <li><a class="dropdown-item" href="#">Najmlade zivotinje</a></li>
        </ul>
    </div>  
  </div>
  <hr>
  <div class="container">
    <div class="row pt-3">
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
          <a href="#" class="card-link">
            <div class="card">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
              <div class="card-body">
                  <h5 class="card-title">Ime</h5>
                  <p class="card-text">Vrsta:</p>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
          </div>
      </div>
      <div class="row pt-3">
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
          <a href="#" class="card-link">
            <div class="card">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
              <div class="card-body">
                  <h5 class="card-title">Ime</h5>
                  <p class="card-text">Vrsta:</p>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
          </div>
      </div>    <div class="row pt-3">
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
          <a href="#" class="card-link">
            <div class="card">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
              <div class="card-body">
                  <h5 class="card-title">Ime</h5>
                  <p class="card-text">Vrsta:</p>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-lg-3 col-6 pb-lg-0 pb-3">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
        </div>
        <div class="col-lg-3 col-6">
            <a href="#" class="card-link">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">  
                  <div class="card-body">
                      <h5 class="card-title">Ime</h5>
                      <p class="card-text">Vrsta:</p>
                  </div>
                </div>
              </a>  
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