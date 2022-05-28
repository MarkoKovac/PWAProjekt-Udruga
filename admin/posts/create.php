<?php include("../../path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Dodaj članak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awesome ikone-->
  <script src="https://kit.fontawesome.com/427140a3b4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <script src="assets/js/script.js" defer></script>
</head>

<body>
  <!--Header-->
  <?php include(ROOT_PATH . "/../../app/includes/adminHeader.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <!--SideBar-->
      <?php include(ROOT_PATH . "/../../app/includes/adminSidebar.php"); ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
          <a href="create.php" class="btn btn-primary" role="button">Dodaj članak</a>
          <a href="index.php" class="btn btn-success" role="button">Lista Članaka</a>
        </div>
        <h2>Lista svih članaka</h2>

        <!--Forma-->

      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>