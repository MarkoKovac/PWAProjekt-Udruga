<?php 
include("path.php");
include(ROOT_PATH . '/app/controllers/animals.php');

if(isset($_GET['id'])){
  $animal = selectOne('animals',['id' => $_GET['id']]);
}

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
  <script src="assets/js/script.js" defer></script>
</head>
<body>
  <!--Header-->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="continer">
    <div class="row m-0 my-5 justify-content-center">
      <div class="col-12 col-md-5 p-0 d-flex justify-content-center">
        <img src="<?php echo BASE_URL . '/assets/images/' . $animal['image']; ?>" alt="" class="w-75 animal-post-img">
      </div>
      <div class="col-12 col-md-5 p-3">
        <h1><?php echo $animal['title']; ?></h1>
        <p class="animal-spec"><?php echo "Vrsta: " . $animal['vrsta']."<br>"; echo "Spol: " . $animal['spol']."<br>"; echo "Velicina: " . $animal['velicina']."<br>";?></p>
        <p><?php echo $animal['body']?></p>
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