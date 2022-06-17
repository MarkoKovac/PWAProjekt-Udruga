<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/animals.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Dodaj životinju</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico"/>
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
        <h2 class="text-center">Dodaj novu životinju</h2>

        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

        <!--Forma-->
        <form action="create.php" method="post" enctype="multipart/form-data">
          <div class="row d-flex justify-content-center">
            <div class="col-md-9">
              <fieldset class="form-group">
                <label for="title" class="form-label">Naslov:</label><br>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $title ?>"><br>
              </fieldset>
              <fieldset class="form-group">
                <label for="myfile" class="form-label">Text:</label><br>
                <textarea name="body" id="body" rows="10" cols="30" class="form-control"><?php echo $body?></textarea><br>
              </fieldset>
              <fieldset class="form-group">
              <label for="myfile" class="form-label">Dodajte slike:</label><br>
              <input type="file" id="myfile" name="image" class="form-control"><br>
              </fieldset>
              <fieldset class="form-group">
                <legend class="col-form-label col-sm-2 pt-0">Vrsta</legend>
                <div class="col-sm-10">
                <?php if ($vrsta == "Pas") : ?>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta1" value="Pas" checked>
                    <label class="form-check-label" for="vrsta1">
                      Pas
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta2" value="Macka">
                    <label class="form-check-label" for="vrsta2">
                      Mačka
                    </label>
                  </div>
                <?php elseif($vrsta == "Macka") : ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta1" value="Pas">
                    <label class="form-check-label" for="vrsta1">
                      Pas
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta2" value="Macka" checked>
                    <label class="form-check-label" for="vrsta2">
                      Mačka
                    </label>
                  </div>
                  <?php else : ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta1" value="Pas">
                    <label class="form-check-label" for="vrsta1">
                      Pas
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="vrsta" id="vrsta2" value="Macka">
                    <label class="form-check-label" for="vrsta2">
                      Mačka
                    </label>
                  </div>
                <?php endif; ?>
                </div>
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <legend class="col-form-label col-sm-2 pt-0">Spol</legend>
                <div class="col-sm-10">
                <?php if ($spol == "Musko") : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol1" value="Musko" checked>
                  <label class="form-check-label" for="spol1">
                    Muško
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol2" value="Zensko">
                  <label class="form-check-label" for="spol2">
                    Žensko
                  </label>
                </div>
                <?php elseif($spol == "Zensko") : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol1" value="Musko">
                  <label class="form-check-label" for="spol1">
                    Muško
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol2" value="Zensko" checked>
                  <label class="form-check-label" for="spol2">
                    Žensko
                  </label>
                </div>
                <?php else : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol1" value="Musko">
                  <label class="form-check-label" for="spol1">
                    Muško
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="spol" id="spol2" value="Zensko">
                  <label class="form-check-label" for="spol2">
                    Žensko
                  </label>
                </div>
                <?php endif; ?>
                </div>
              </fieldset>
              <hr>
              <fieldset class="form-group">
                <legend class="col-form-label col-sm-2 pt-0">Velicina</legend>
                <div class="col-sm-10">
                <?php if ($velicina == "Mali") : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina1" value="Mali" checked>
                  <label class="form-check-label" for="velicina1">
                    Mali
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Srednji">
                  <label class="form-check-label" for="velicina2">
                    Srednji
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Veliki">
                  <label class="form-check-label" for="velicina2">
                    Veliki
                  </label>
                </div>
                <?php elseif($velicina == "Srednji") : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina1" value="Mali">
                  <label class="form-check-label" for="velicina1">
                    Mali
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Srednji" checked>
                  <label class="form-check-label" for="velicina2">
                    Srednji
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Veliki">
                  <label class="form-check-label" for="velicina2">
                    Veliki
                  </label>
                </div>
                <?php elseif($velicina == "Mali"): ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina1" value="Mali">
                  <label class="form-check-label" for="velicina1">
                    Mali
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Srednji">
                  <label class="form-check-label" for="velicina2">
                    Srednji
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Veliki" checked>
                  <label class="form-check-label" for="velicina2">
                    Veliki
                  </label>
                </div>
                <?php else : ?>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina1" value="Mali">
                  <label class="form-check-label" for="velicina1">
                    Mali
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Srednji">
                  <label class="form-check-label" for="velicina2">
                    Srednji
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="velicina" id="velicina2" value="Veliki">
                  <label class="form-check-label" for="velicina2">
                    Veliki
                  </label>
                </div>
                <?php endif; ?>
                </div>
                <hr>
                <fieldset class="form-group">
              <?php if (empty($published)) : ?>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="published">
                <label class="form-check-label" for="published">Published</label><br>
                </div>
              <?php else : ?>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="published" checked>
                <label class="form-check-label" for="published">Published</label><br>
                </div>
              <?php endif; ?>
              </fieldset>
                <fieldset class="form-group">
                  <button name="add-animal" type="submit" class="btn btn-primary my-3">Dodaj životinju</button>
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