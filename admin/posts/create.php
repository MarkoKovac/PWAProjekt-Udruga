<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Dodaj članak</title>
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
          <a href="index.php" class="btn btn-success" role="button">Lista članaka</a>
          <a href="create.php" class="btn btn-primary" role="button">Dodaj članak</a>
        </div>
        <h2>Dodaj novi članaka</h2>

        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

        <!--Forma-->
        <form action="create.php" method="post" enctype="multipart/form-data">
          <div class="row d-flex justify-content-center">
            <div class="col-md-9">
              <label for="title" class="form-label">Naslov:</label><br>
              <input type="text" id="title" name="title" class="form-control" value="<?php echo $title ?>"><br>

              <label for="body" class="form-label">Text:</label><br>
              <textarea name="body" id="body" rows="10" cols="30" class="form-control"><?php echo $body ?></textarea><br>

              <label for="myfile" class="form-label">Dodajte slike:</label><br>
              <input type="file" id="myfile" name="image" class="form-control"><br>
              
              <?php if (empty($published)): ?>
                <label for="published">Published</label>
                <input type="checkbox" name="published"><br>
              <?php else: ?>
                <label for="published">Published</label>
                <input type="checkbox" name="published" checked><br>
              <?php endif;?>

              <button name="add-post" type="submit" class="btn btn-primary my-3">Dodaj članak</button>
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