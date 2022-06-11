<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
$animals = selectAll('posts', ['published' => 1]);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novosti - LePas Udruga za zaštitu životinja</title>
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
        <h1>Novosti</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
          responsive, mobile-first projects on the web.</p>
      </div>
    </div>
  </div>

  <hr>
  <div class="container d-flex justify-content-between">
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

      <?php foreach (array_reverse($posts) as $key => $post) : ?>

        <div class="col-lg-4 col-12 pb-lg-0 pb-3">
          <a href="#" class="card-link">
            <div class="card">
              <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" width="100%">
              <hr>
              <div class="card-body">
                <h5 class="card-title"><?php echo $post['title']; ?></h5>
              </div>
              <div class="card-footer text-muted">
                <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
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