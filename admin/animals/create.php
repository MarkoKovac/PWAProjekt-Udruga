<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/animals.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Dodaj životinju</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awesome ikone-->
  <script src="https://kit.fontawesome.com/1c5108fa97.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <script src="assets/js/script.js" defer></script>
</head>

<body>
  <!--Header-->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

  <div class="container-fluid">
    <div class="row">
      <!--SideBar-->
      <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
          <a href="index.php" class="btn btn-success" role="button">Lista životinja</a>
          <a href="create.php" class="btn btn-primary" role="button">Dodaj životinju</a>
        </div>
        <h2>Dodaj novu životinju</h2>

        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

        <!--Forma-->
        <form action="">
          <div class="row d-flex justify-content-center">
            <div class="col-md-9">
              <fieldset class="form-group">
                <label for="title" class="form-label">Naslov:</label><br>
                <input type="text" id="title" name="title" class="form-control"><br>
              </fieldset>
              <fieldset class="form-group">
                <label for="myfile" class="form-label">Text:</label><br>
                <textarea name="message" rows="10" cols="30" class="form-control"></textarea><br>
              </fieldset>
              <fieldset class="form-group">
                <label for="myfile" class="form-label">Dodajte slike:</label><br>
                <input type="file" id="myfile" name="myfile" class="form-control"><br>
              </fieldset>
              <fieldset class="form-group">
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
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <legend class="col-form-label col-sm-2 pt-0">Spol</legend>
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
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <legend class="col-form-label col-sm-2 pt-0">Velicine</legend>
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
                <hr>
                <?php if (empty($published)): ?>
                <label for="published">Published</label>
                <input type="checkbox" name="published"><br>
                <?php else: ?>
                <label for="published">Published</label>
                <input type="checkbox" name="published" checked><br>
                <?php endif;?>

                <fieldset class="form-group">
                  <button type="submit" class="btn btn-primary my-4">Dodaj članak</button>
                </fieldset>
            </div>
          </div>
        </form>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>