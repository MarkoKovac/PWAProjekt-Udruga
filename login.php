<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
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

    <div class="container" style="height: 500px;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-4">

        <form action="login.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" value="<?php echo $username; ?>">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" value="<?php echo $password; ?>">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="login-btn">Sign in</button>
        </form>
        </div>
        </div>
    </div>

    <!--Separate Popper i Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>